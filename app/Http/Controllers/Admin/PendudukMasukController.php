<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Masuk;
use App\Models\PendudukSementara;
use App\Models\PendudukTetap;
use App\Models\Keluarga;
use App\Models\Alasan;
use PDF;

class PendudukMasukController extends Controller {

    public function index() {
        $wait = Penduduk::join('masuks','masuks.id_penduduk','=','penduduks.id')
                ->where('status','2')
                ->select('*','masuks.id_penduduk as id_penduduk_selected')
                ->get();
        // 1=Aktif, 2=Menunggu, 3=Pindah, 4=Meninggal, 5=Ditolak
        $confirm = Penduduk::join('masuks','masuks.id_penduduk','=','penduduks.id')
                    ->where('status','1')->orWhere('status','3')->orWhere('status','4')
                    ->get();
        $status = 1;
        return view('admin.penduduk-masuk.index', compact(['wait','confirm','status']));
    }

    public function show_data_penduduk($id) {
        $wait = Penduduk::join('masuks','masuks.id_penduduk','=','penduduks.id')
                ->where('status','2')
                ->select('*','masuks.id_penduduk as id_penduduk_selected')
                ->get();
        $confirm = Penduduk::join('masuks','masuks.id_penduduk','=','penduduks.id')
                    ->where('status','1')->orWhere('status','3')->orWhere('status','4')
                    ->get();

        $data = Penduduk::join('penduduk_tetaps','penduduk_tetaps.id_penduduk','=','penduduks.id')
                ->join('masuks','masuks.id_penduduk','=','penduduks.id')
                ->where('masuks.id_penduduk',$id);
        $data2 = Penduduk::join('penduduk_sementaras','penduduk_sementaras.id_penduduk','=','penduduks.id')
                ->join('masuks','masuks.id_penduduk','=','penduduks.id')
                ->where('masuks.id_penduduk',$id);
        
        if($data->count() == 1) {
            $tetap = Penduduk::
                    join('masuks','masuks.id_penduduk','=','penduduks.id')
                    ->where('masuks.id_penduduk', $id)
                    ->first();
            $keluarga = Keluarga::join('penduduk_tetaps','penduduk_tetaps.id_keluarga','=','keluargas.id')
                        ->where('penduduk_tetaps.id_penduduk',$id)
                        ->first();
            $status = 2;
            return view('admin.penduduk-masuk.index', compact(['tetap','status','keluarga','wait','confirm']));
        } else if ($data2->count() == 1) {
            $sementara = Penduduk::join('masuks','masuks.id_penduduk','=','penduduks.id')
                        ->join('penduduk_sementaras','penduduk_sementaras.id_penduduk','=','penduduks.id')
                        ->select('*','penduduk_sementaras.no_kk as no_kk_penduduk_sementara')
                        ->where('masuks.id_penduduk', $id)
                        ->first();
            $alasan = Alasan::get();
            $status = 3;
            return view('admin.penduduk-masuk.index', compact(['sementara','status','wait','confirm','alasan']));
        } else {
            $status = 4;
            return view('admin.penduduk-masuk.index', compact(['status','wait','confirm']));
        }
    }

    public function terima($id) {
        $data = Penduduk::join('penduduk_tetaps','penduduk_tetaps.id_penduduk','=','penduduks.id')
                ->where('penduduks.id',$id);
        $data2 = Penduduk::join('penduduk_sementaras','penduduk_sementaras.id_penduduk','=','penduduks.id')
                ->where('penduduks.id',$id);
        if ($data->count() == 1) {
            if(Penduduk::where('id',$id)->update(['status'=>'1', 'status_penduduk'=>'aktif'])) {
                $tetap = Penduduk::join('penduduk_tetaps','penduduk_tetaps.id_penduduk','=','penduduks.id')
                    ->join('masuks','masuks.id_penduduk','=','penduduks.id')
                    ->where('penduduks.id', $id)
                    ->first();
                $keluarga = Keluarga::join('penduduk_tetaps','penduduk_tetaps.id_keluarga','=','keluargas.id')
                            ->where('penduduk_tetaps.id_penduduk',$id)
                            ->first();
                return $this->printTetap($tetap);
                // return redirect('admin/penduduk-masuk')->with('success','Laporan Diterima Berhasil Disimpan');
            } else {
                return redirect('admin/penduduk-masuk')->with('failed','Laporan Diterima Gagal Disimpan');
            }
        } else {
            if(Penduduk::where('id',$id)->update(['status'=>'1', 'status_penduduk'=>'aktif'])) {
                $sementara = Penduduk::join('penduduk_sementaras','penduduk_sementaras.id_penduduk','=','penduduks.id')
                        ->join('masuks','masuks.id_penduduk','=','penduduks.id')
                        ->where('penduduks.id', $id)
                        ->first();
                return PDF::loadView('admin.penduduk-masuk.print-sementara', compact(['sementara']))->stream();
                
            } else {
                return redirect('admin/penduduk-masuk')->with('failed','Laporan Diterima Gagal Disimpan');
            }
        }
    }

    public function tolak($id) {
        if(Penduduk::where('id',$id)->update(['status'=>'5', 'status_penduduk'=>'ditolak'])) {
            return redirect('admin/penduduk-masuk')->with('success','Laporan Diterima Berhasil Disimpan');
        } else {
            return redirect('admin/penduduk-masuk')->with('failed','Laporan Diterima Gagal Disimpan');
        }
    }

    public function printTetap($data) {
        $sementara = $data;
        return PDF::loadView('admin.penduduk-masuk.print-sementara', compact(['sementara']))->stream();
    }

}
