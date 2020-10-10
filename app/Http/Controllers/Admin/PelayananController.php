<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keperluan;
use App\Models\Pelayanan;
use App\Models\DetailPelayanan;
use PDF;

class PelayananController extends Controller {
    public function index() {
        $wait = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.status','=','1')
                ->select('pelayanans.id','penduduks.name','pelayanans.no_sp')
                ->groupBy('pelayanans.id','penduduks.nik')
				->get();
		$confirm = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.status','=','2')
                ->select('pelayanans.id as id_pelayanan','penduduks.name','pelayanans.no_sp')
                ->groupBy('pelayanans.id','penduduks.nik')
				->get();
        $status = 1;
        return view('admin.pelayanan.index',compact(['wait','status','confirm']));
    }

    public function show($id) {
        $wait = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.status','=','1')
                ->select('pelayanans.id','penduduks.name','pelayanans.no_sp')
                ->groupBy('pelayanans.id','penduduks.nik')
                ->get();
        $data = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->select('*','pelayanans.id as id_pelayanan')
                ->where('pelayanans.id','=',$id)
				->first();
		$confirm = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.status','=','2')
                ->select('pelayanans.id as id_pelayanan','penduduks.name','pelayanans.no_sp')
                ->groupBy('pelayanans.id','penduduks.nik')
				->get();
        $keperluan = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.id','=',$id)
                ->select('*', 'detail_pelayanans.keterangan as detail_pelayanan_keterangan')
                ->get();
        $status = 2;
        return view('admin.pelayanan.index',compact(['wait','status','data','keperluan','confirm']));
    }

    public function terima($id) {
        $data = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->select('*','pelayanans.id as id_pelayanan')
                ->where('pelayanans.id','=',$id)
                ->first();
        $keperluan = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.id','=',$id)
                ->select('*', 'detail_pelayanans.keterangan as detail_pelayanan_keterangan')
                ->get();
        if(Pelayanan::where('id',$id)->update(['status'=>'2'])) {
            return PDF::loadView('admin.pelayanan.print', compact(['data','keperluan']))->stream();
        }
    }

    public function tolak($id) {
        if(Pelayanan::where('id',$id)->update(['status'=>'3'])) {
            return redirect('admin/pelayanan')->with('success','Surat Pengantar Berhasil Disimpan');
        } else {
			 return redirect('admin/pelayanan')->with('failed','Surat Pengantar Gagal Disimpan');
		}
	}

	public function cetak($id) {
        $data = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->select('*','pelayanans.id as id_pelayanan')
                ->where('pelayanans.id','=',$id)
                ->first();
        $keperluan = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.id','=',$id)
                ->select('*', 'detail_pelayanans.keterangan as detail_pelayanan_keterangan')
                ->get();
    	return PDF::loadView('admin.pelayanan.print', compact(['data','keperluan']))->stream();
    }
}
