<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keluarga;
use App\Models\Penduduk;
use App\Models\PendudukTetap;

class KeluargaController extends Controller {
    public function index() {
        $data = Keluarga::get();
        return view('admin.keluarga.index', compact(['data']));
    }

    public function store(Request $request) {
        $rules = $this->validate($request, [
            'no_kk' => 'required|numeric',
            'nama_kepala_keluarga' => 'required'
        ]);
        if ($rules) {
            $data = new Keluarga;
            $data->no_kk = $request->no_kk;
            $data->nama_kepala_keluarga = $request->nama_kepala_keluarga;
            if($data->save()) {
                return redirect('admin/keluarga')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/keluarga')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function view($id) {
        $selected = Keluarga::where('id',$id)->first();
        $anggota = PendudukTetap::join('penduduks','penduduks.id','=','penduduk_tetaps.id_penduduk')
                    ->join('keluargas','keluargas.id','=','penduduk_tetaps.id_keluarga')
                    ->where('penduduk_tetaps.id_keluarga',$id)
                    ->get();
        return view('admin.keluarga.view', compact(['selected','anggota']));
    }

    public function edit($id) {
        $data = $data = Keluarga::get();
        $selected = Keluarga::where('id',$id)->first();
        return view('admin.keluarga.update', compact(['data','selected']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request, [
            'no_kk' => 'required|numeric',
            'nama_kepala_keluarga' => 'required'
        ]);
        if ($rules) {
            $data = Keluarga::where('id',$id)->first();
            $data->no_kk = $request->no_kk;
            $data->nama_kepala_keluarga = $request->nama_kepala_keluarga;
            if($data->save()) {
                return redirect('admin/keluarga')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/keluarga')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function destroy($id) {
        $data = Keluarga::where('id', $id)->first();
        if($data->delete()) {
            return redirect('admin/keluarga')->with('success','Data Berhasil Dihapus !');
        } else {
            return redirect('admin/keluarga')->with('failed','Data Gagal Dihapus !');
        }
    }
}
