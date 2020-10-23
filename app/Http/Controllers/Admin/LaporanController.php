<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keperluan;
use App\Models\Pelayanan;
use App\Models\DetailPelayanan;
use App\Models\Penduduk;
use App\Models\Masuk;
use App\Models\PendudukSementara;
use App\Models\PendudukTetap;
use App\Models\Keluarga;
use App\Models\Alasan;
use App\Models\Kelahiran;
use App\Models\Aspirasi;
use App\Models\KategoriAspirasi;
use App\Models\BalasanAspirasi;
use PDF;

class LaporanController extends Controller {

    public function laporan_pelayanan() {
        return view('admin.laporan.laporan-pelayanan');
    }

    public function laporan_penduduk_masuk() {
        return view('admin.laporan.laporan-penduduk-masuk');
    }

    public function laporan_penduduk_keluar() {
        return view('admin.laporan.laporan-penduduk-keluar');
    }

    public function laporan_kelahiran_penduduk() {
        return view('admin.laporan.laporan-kelahiran-penduduk');
    }

    public function laporan_kematian_penduduk() {
        return view('admin.laporan.laporan-kematian-penduduk');
    }

    public function laporan_data_aspirasi() {
        return view('admin.laporan.laporan-data-aspirasi');
    }

    public function get_laporan(Request $request) {
        $rules = $this->validate($request,[
            'date_start' => 'required',
            'date_end' => 'required',
        ]);

        if ($rules) {
            if($request->date_start < $request->date_end) {
                if($request->sort == 'laporan_pelayanan') {
                    $data = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                            ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                            ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                            ->where('pelayanans.status','=','2')
                            ->where('pelayanans.created_at','>=',$request->date_start)
                            ->where('pelayanans.created_at','<=',$request->date_end)
                            ->select('pelayanans.id as id_pelayanan','penduduks.name','pelayanans.no_sp','pelayanans.tanggal')
                            ->groupBy('pelayanans.id','penduduks.nik')
                            ->get();
                    $data_details = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                            ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                            ->select('*','detail_pelayanans.keterangan as keterangan_pelayanan')
                            ->get();
                    $data_details2 = '';
                    $url = 'print-pelayanan';
                    $date_from = $request->date_start;
                    $date_to = $request->date_end;
                    return $this->pdf($data, $data_details, $data_details2, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_penduduk_masuk') {
                    $data = Penduduk::join('masuks','masuks.id_penduduk','=','penduduks.id')
                            ->where('masuks.created_at','>=',$request->date_start)
                            ->where('masuks.created_at','<=',$request->date_end)
                            ->get();
                    $data_details = PendudukTetap::get();
                    $data_details2 = PendudukSementara::get();
                    $url = 'print-penduduk-masuk';
                    $date_from = $request->date_start;
                    $date_to = $request->date_end;
                    return $this->pdf($data, $data_details, $data_details2, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_penduduk_keluar') {
                    $data = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                            ->where('keluars.status','2')
                            ->where('keluars.created_at','>=',$request->date_start)
                            ->where('keluars.created_at','<=',$request->date_end)
                            ->get();
                    $data_details = PendudukTetap::get();
                    $data_details2 = PendudukSementara::get();
                    $url = 'print-penduduk-keluar';
                    $date_from = $request->date_start;
                    $date_to = $request->date_end;
                    return $this->pdf($data, $data_details, $data_details2, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_kelahiran_penduduk') {
                    $data = Penduduk::join('kelahirans','kelahirans.id_penduduk','=','penduduks.id')
                            ->where('kelahirans.created_at','>=',$request->date_start)
                            ->where('kelahirans.created_at','<=',$request->date_end)
                            ->get();
                    $data_details = PendudukTetap::get();
                    $data_details2 = PendudukSementara::get();
                    $url = 'print-kelahiran-penduduk';
                    $date_from = $request->date_start;
                    $date_to = $request->date_end;
                    return $this->pdf($data, $data_details, $data_details2, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_kematian_penduduk') {
                    $data = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                            ->where('kematians.status','2')
                            ->where('kematians.created_at','>=',$request->date_start)
                            ->where('kematians.created_at','<=',$request->date_end)
                            ->get();
                    $data_details = PendudukTetap::get();
                    $data_details2 = PendudukSementara::get();
                    $url = 'print-kematian-penduduk';
                    $date_from = $request->date_start;
                    $date_to = $request->date_end;
                    return $this->pdf($data, $data_details, $data_details2, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_data_aspirasi') {
                    $data = Aspirasi::join('penduduks','penduduks.id','=','aspirasis.id_penduduk')
                            ->join('kategori_aspirasis','kategori_aspirasis.id','=','aspirasis.id_kategori_aspirasi')
                            ->select('*','aspirasis.id as id_aspirasi','aspirasis.status as status_aspirasi')
                            ->where('aspirasis.created_at','>=',$request->date_start)
                            ->where('aspirasis.created_at','<=',$request->date_end)
                            ->orderBy('aspirasis.id','desc')
                            ->get();
                    $data_details = '';
                    $data_details2 = '';
                    $url = 'print-aspirasi';
                    $date_from = $request->date_start;
                    $date_to = $request->date_end;
                    return $this->pdf($data, $data_details, $data_details2, $url, $date_from, $date_to);
                } else {
                    echo 'data salah';
                }
            } else {
                return redirect()->back()->with('failed', 'Tanggal Awal Harus Lebih Kecil');
            }
        }
    }

    public function pdf($data, $data_details, $data_details_2, $url, $date_from, $date_to) {
        $pdf = PDF::loadView('admin.laporan.'.$url, compact(['data','data_details','data_details_2','date_from','date_to']))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }

}
