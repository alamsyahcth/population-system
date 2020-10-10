<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Kematian;
use PDF;

class KematianPendudukController extends Controller {
    public function index() {
        $wait = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                ->where('kematians.status','1')
                ->select('*','kematians.id_penduduk as id_penduduk_selected')
                ->get();
        $confirm = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                    ->where('kematians.status','2')
                    ->get();
        $status = 1;
        return view('admin.kematian-penduduk.index', compact(['wait','confirm','status']));
    }

    public function show($id) {
        $wait = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                ->where('kematians.status','1')
                ->select('*','kematians.id_penduduk as id_penduduk_selected')
                ->get();
        $confirm = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                    ->where('kematians.status','2')
                    ->get();
        $data = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                ->where('penduduks.id','=',$id)
                ->select('*','kematians.id_penduduk as id_penduduk_selected')
                ->first();
        $status = 2;
        return view('admin.kematian-penduduk.index',compact(['wait','status','data','confirm']));
    }

    public function terima($id) {
        $data = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                ->where('penduduks.id','=',$id)
                ->select('*','kematians.id_penduduk as id_penduduk_selected', 'kematians.id as id_kematian')
                ->first();
        if(Penduduk::where('id',$id)->update(['status'=>'4','status_penduduk'=>'meninggal']) && Kematian::where('id_penduduk',$id)->update(['status'=>'2'])) {
            return PDF::loadView('admin.kematian-penduduk.print', compact(['data']))->stream();
        }
    }

    public function tolak($id) {
        if(Kematian::where('id_penduduk',$id)->update(['status'=>'3'])) {
            return redirect('admin/kematian-penduduk')->with('success','Surat Berita Kematian Berhasil Disimpan');
        } else {
			 return redirect('admin/kematian-penduduk')->with('failed','Surat Berita Kematian Gagal Disimpan');
		}
	}

    public function cetak($id) {
        $data = Penduduk::join('kematians','kematians.id_penduduk','=','penduduks.id')
                ->where('penduduks.id','=',$id)
                ->select('*','kematians.id_penduduk as id_penduduk_selected', 'kematians.id as id_kematian')
                ->first();
        return PDF::loadView('admin.kematian-penduduk.print', compact(['data']))->stream();
    }
}
