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

class PendudukMasukController extends Controller {

    public function index() {
        $wait = Penduduk::where('status','2')->get();
        // 1=Menunggu, 2=Aktif, 3=Pindah
        $confirm = Penduduk::where('status','1')->orWhere('status','3')->orWhere('status','4')->get();
        $status = 1;
        return view('admin.penduduk-masuk.index', compact(['wait','confirm','status']));
    }

    public function show_data_penduduk($id = null) {
        $wait = Penduduk::where('status','2')->get();
        $confirm = Penduduk::where('status','1')->orWhere('status','3')->orWhere('status','4')->get();
        if($id == null) {
            $status = 1;
            return view('admin.penduduk-masuk.index', compact(['status','wait','confirm']));
        } else {
            $data = Penduduk::join('penduduk_tetaps','penduduk_tetaps.id_penduduk','=','penduduks.id')
                    ->where('penduduks.id',$id);
            $data2 = Penduduk::join('penduduk_sementaras','penduduk_sementaras.id_penduduk','=','penduduks.id')
                    ->where('penduduks.id',$id);
            if($data->count() == 1) {
                $tetap = Penduduk::join('penduduk_tetaps','penduduk_tetaps.id_penduduk','=','penduduks.id')
                        ->join('masuks','masuks.id_penduduk','=','penduduks.id')
                        ->where('penduduks.id', $id)
                        ->first();
                $keluarga = Keluarga::join('penduduk_tetaps','penduduk_tetaps.id_keluarga','=','keluargas.id')
                            ->where('penduduk_tetaps.id_penduduk',$id)
                            ->first();
                $status = 2;
                return view('admin.penduduk-masuk.index', compact(['tetap','status','wait','confirm','keluarga']));
            } else if ($data2->count() == 1) {
                $sementara = Penduduk::join('penduduk_sementaras','penduduk_sementaras.id_penduduk','=','penduduks.id')
                            ->join('masuks','masuks.id_penduduk','=','penduduks.id')
                            ->where('penduduks.id', $id)
                            ->first();
                $status = 3;
                return view('admin.penduduk-masuk.index', compact(['sementara','status','wait','confirm']));
            } else {
                $status = 4;
                return view('admin.penduduk-masuk.index', compact(['status','wait','confirm']));
            }
        }
    }

    public function terima($id) {
        if(Penduduk::where('id',$id)->update(['status'=>'1', 'status_penduduk'=>'aktif'])) {
            return redirect('admin/penduduk-masuk')->with('success','Laporan Diterima Berhasil Disimpan');
        } else {
            return redirect('admin/penduduk-masuk')->with('failed','Laporan Diterima Gagal Disimpan');
        }
    }

    public function tolak($id) {
        if(Penduduk::where('id',$id)->update(['status'=>'5', 'status_penduduk'=>'ditolak'])) {
            return redirect('admin/penduduk-masuk')->with('success','Laporan Diterima Berhasil Disimpan');
        } else {
            return redirect('admin/penduduk-masuk')->with('failed','Laporan Diterima Gagal Disimpan');
        }
    }

}
