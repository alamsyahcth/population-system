<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Keluar;
use PDF;

class PendudukKeluarController extends Controller {
   
    public function index() {
        $wait = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                ->where('keluars.status','1')
                ->select('*','keluars.id_penduduk as id_penduduk_selected')
                ->get();
        $confirm = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                    ->where('keluars.status','2')
                    ->get();
        $status = 1;
        return view('admin.penduduk-keluar.index', compact(['wait','confirm','status']));
    }

    public function show($id) {
        $wait = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                ->where('keluars.status','1')
                ->select('*','keluars.id_penduduk as id_penduduk_selected')
                ->get();
        $confirm = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                    ->where('keluars.status','2')
                    ->get();
        $data = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                ->where('penduduks.id','=',$id)
                ->select('*','keluars.id_penduduk as id_penduduk_selected')
                ->first();
        $status = 2;
        return view('admin.penduduk-keluar.index',compact(['wait','status','data','confirm']));
    }

    public function terima($id) {
        $data = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                ->where('penduduks.id','=',$id)
                ->select('*','keluars.id_penduduk as id_penduduk_selected', 'keluars.id as id_keluars')
                ->first();
        if(Penduduk::where('id',$id)->update(['status'=>'3','status_penduduk'=>'keluar']) && Keluar::where('id_penduduk',$id)->update(['status'=>'2'])) {
            return PDF::loadView('admin.penduduk-keluar.print', compact(['data']))->stream();
        }
    }

    public function tolak($id) {
        if(Keluar::where('id_penduduk',$id)->update(['status'=>'3'])) {
            return redirect('admin/penduduk-keluar')->with('success','Surat Penduduk Keluar Berhasil Disimpan');
        } else {
			 return redirect('admin/penduduk-keluar')->with('failed','Surat Penduduk Keluar Gagal Disimpan');
		}
	}

    public function cetak($id) {
        $data = Penduduk::join('keluars','keluars.id_penduduk','=','penduduks.id')
                ->where('penduduks.id','=',$id)
                ->select('*','keluars.id_penduduk as id_penduduk_selected', 'keluars.id as id_kematian')
                ->first();
        return PDF::loadView('admin.penduduk-keluar.print', compact(['data']))->stream();
    }

}
