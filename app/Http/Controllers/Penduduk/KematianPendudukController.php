<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Kematian;
use Auth;

class KematianPendudukController extends Controller {

    public function index() {
        $penduduk = Penduduk::where('status','=','1')->get();
        return view('penduduk.kematian-penduduk', compact(['penduduk']));
    }

    public function create(Request $request) {
        $rules = $this->validate($request,[
            'id_penduduk' => 'required',
            'tgl_kematian' => 'required',
            'waktu_kematian' => 'required',
            'lokasi_kematian' => 'required',
            'penyebab' => 'required',
        ]);

        if($rules) {
            $data = new Kematian;
            $data->id_penduduk = $request->id_penduduk;
            $data->tgl_laporan = date("Y-m-d");
            $data->tgl_kematian = $request->tgl_kematian;
            $data->waktu_kematian = $request->waktu_kematian;
            $data->lokasi_kematian = $request->lokasi_kematian;
            $data->penyebab = $request->penyebab;
            $data->nik_pelapor = Auth::user()->nik;
            $data->nama_pelapor = Auth::user()->name;
            $data->status = '1';

            if($data->save()) {
                return redirect('penduduk/kematian-penduduk')->with('success','Data Berhasil Disimpan, Segera Melapor Ke Pengurus RT Dengan Membawa Dokumen Yang Dibutuhkan');
            }
        }
    }
}
