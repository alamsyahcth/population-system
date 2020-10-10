<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelayanan;
use App\Models\Penduduk;
use App\Models\DetailPelayanan;
use App\Models\Keperluan;
use Auth;

class DashboardPendudukController extends Controller {
   
    public function index() {
        $pelayanan = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('penduduks','penduduks.id','=','detail_pelayanans.id_penduduk')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->where('penduduks.id','=',Auth::user()->id)
                ->select('pelayanans.id','penduduks.name','pelayanans.no_sp','pelayanans.status as status_pelayanan')
                ->groupBy('pelayanans.id','penduduks.nik');
        $keperluan = Pelayanan::join('detail_pelayanans','detail_pelayanans.id_pelayanan','=','pelayanans.id')
                ->join('keperluans','keperluans.id','=','detail_pelayanans.id_keperluan')
                ->select('*', 'detail_pelayanans.keterangan as detail_pelayanan_keterangan')
                ->get();
        $data = $pelayanan->get();
        $count = $pelayanan->count();
        return view('penduduk.dashboard', compact(['data','count','keperluan']));
    }

}
