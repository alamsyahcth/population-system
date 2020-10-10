<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;
use App\Models\Masuk;
use App\Models\Keluar;
use App\Models\Kelahiran;
use App\Models\Kematian;
use App\Models\Aspirasi;

class DashboardAdminController extends Controller {
    
    public function index() {
        $pelayanan = Pelayanan::where('status','=','2')->count();
        $masuk = Masuk::count();
        $keluar = Keluar::count();
        $kelahiran = Kelahiran::count();
        $kematian = Kematian::count();
        $aspirasi = Aspirasi::count();

        $data_aspirasi = Aspirasi::join('penduduks','penduduks.id','=','aspirasis.id_penduduk')
                    ->join('kategori_aspirasis','kategori_aspirasis.id','=','aspirasis.id_kategori_aspirasi')
                    ->select('*','aspirasis.id as id_aspirasi','aspirasis.status as status_aspirasi')
                    ->orderBy('aspirasis.id','desc')
                    ->limit(5)
                    ->get();
        return view('admin.dashboard', compact(['pelayanan','masuk','keluar','kelahiran','kematian','aspirasi','data_aspirasi']));
    }

}
