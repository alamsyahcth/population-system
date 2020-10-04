<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keperluan;
use App\Models\Pelayanan;
use App\Models\DetailPelayanan;

class PelayananController extends Controller {
    public function index() {
        $wait = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.status','=','1')
                ->select('pelayanans.id','penduduks.name','pelayanans.no_sp')
                ->groupBy('pelayanans.id','penduduks.nik')
                ->get();
        $status = 1;
        return view('admin.pelayanan.index',compact(['wait','status']));
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
                ->where('pelayanans.id','=',$id)
                ->first();
        $keperluan = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('pelayanans.id','=',$id)
                ->select('*', 'detail_pelayanans.keterangan as detail_pelayanan_keterangan')
                ->get();
        $status = 2;
        return view('admin.pelayanan.index',compact(['wait','status','data','keperluan']));
    }
}
