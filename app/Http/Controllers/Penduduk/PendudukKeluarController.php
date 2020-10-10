<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Keluar;
use Auth;

class PendudukKeluarController extends Controller {
   public function index() {
        $penduduk = Penduduk::where('status','=','1')->get();
        return view('penduduk.penduduk-keluar', compact(['penduduk']));
    }

    public function create(Request $request) {
        $rules = $this->validate($request,[
            'id_penduduk' => 'required',
            'tanggal_keluar' => 'required',
            'alasan_keluar' => 'required',
            'alamat_tujuan' => 'required',
        ]);

        if($rules) {
            $data = new Keluar;
            $data->id_penduduk = $request->id_penduduk;
            $data->tgl_laporan = date("Y-m-d");
            $data->tanggal_keluar = $request->tanggal_keluar;
            $data->alasan_keluar = $request->alasan_keluar;
            $data->alamat_tujuan = $request->alamat_tujuan;
            $data->nik_pelapor = Auth::user()->nik;
            $data->nama_pelapor = Auth::user()->name;
            $data->status = '1';

            if($data->save()) {
                return redirect('penduduk/penduduk-keluar')->with('success','Data Berhasil Disimpan, Segera Melapor Ke Pengurus RT Dengan Membawa Dokumen Yang Dibutuhkan');
            }
        }
    }
}
