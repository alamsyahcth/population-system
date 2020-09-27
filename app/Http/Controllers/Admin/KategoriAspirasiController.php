<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriAspirasi;

class KategoriAspirasiController extends Controller {
    public function index() {
        $data = KategoriAspirasi::get();
        return view('admin.kategori-aspirasi.index', compact(['data']));
    }

    public function store(Request $request) {
        $rules = $this->validate($request, [
            'name_aspirasi' => 'required',
            'keterangan' => 'required'
        ]);
        if ($rules) {
            $data = new KategoriAspirasi;
            $data->name_aspirasi = $request->name_aspirasi;
            $data->keterangan = $request->keterangan;
            if($data->save()) {
                return redirect('admin/kategori-aspirasi')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/kategori-aspirasi')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function edit($id) {
        $data = $data = KategoriAspirasi::get();
        $selected = KategoriAspirasi::where('id',$id)->first();
        return view('admin.kategori-aspirasi.update', compact(['data','selected']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request, [
            'name_aspirasi' => 'required',
            'keterangan' => 'required'
        ]);
        if ($rules) {
            $data = KategoriAspirasi::where('id',$id)->first();
            $data->name_aspirasi = $request->name_aspirasi;
            $data->keterangan = $request->keterangan;
            if($data->save()) {
                return redirect('admin/kategori-aspirasi')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/kategori-aspirasi')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function destroy($id) {
        $data = KategoriAspirasi::where('id', $id)->first();
        if($data->delete()) {
            return redirect('admin/kategori-aspirasi')->with('success','Data Berhasil Dihapus !');
        } else {
            return redirect('admin/kategori-aspirasi')->with('failed','Data Gagal Dihapus !');
        }
    }
}
