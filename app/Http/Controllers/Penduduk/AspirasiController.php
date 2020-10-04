<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\KategoriAspirasi;
use Auth;

class AspirasiController extends Controller {
    
    public function index() {
        $kategori = KategoriAspirasi::get();
        $aspirasi = Aspirasi::join('kategori_aspirasis','kategori_aspirasis.id','=','aspirasis.id_kategori_aspirasi')
                    ->where('id_penduduk',Auth::user()->id)
                    ->orderBy('aspirasis.id','desc')
                    ->select('*','aspirasis.id as id_aspirasi');
        $balasan = Aspirasi::join('penduduks','penduduks.id','=','aspirasis.id_penduduk')
                    ->join('kategori_aspirasis','kategori_aspirasis.id','=','aspirasis.id_kategori_aspirasi')
                    ->join('balasan_aspirasis','balasan_aspirasis.id_aspirasi','=','aspirasis.id')
                    ->select('*','aspirasis.id as id_aspirasi','aspirasis.status as status_aspirasi')
                    ->get();
        $data = $aspirasi->get();
        $count = $aspirasi->count();
        return view('penduduk.aspirasi', compact(['kategori','data','count','balasan']));
    }

    public function store(Request $request) {
        $rules = $this->validate($request,[
            'id_kategori_aspirasi' => 'required',
            'isi' => 'required'
        ]);

        if($rules) {
            $data = new Aspirasi;
            $data->id_penduduk = Auth::user()->id;
            $data->id_kategori_aspirasi = $request->id_kategori_aspirasi;
            $data->isi = $request->isi;
            $data->status = '1';

            if($data->save()) {
                return redirect('penduduk/aspirasi')->with('success','Apirasi Berhasil Disampaikan');
            } else {
                return redirect('penduduk/aspirasi')->with('failed','Apirasi Gagal Disampaikan');
            }
        }
    }
}
