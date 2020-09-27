<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keperluan;

class KeperluanController extends Controller {
    
    public function index() {
        $data = Keperluan::get();
        return view('admin.keperluan.index', compact(['data']));
    }

    public function store(Request $request) {
        $rules = $this->validate($request, [
            'nama_keperluan' => 'required',
            'keterangan' => 'required'
        ]);
        if ($rules) {
            $data = new Keperluan;
            $data->nama_keperluan = $request->nama_keperluan;
            $data->keterangan = $request->keterangan;
            if($data->save()) {
                return redirect('admin/keperluan')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/keperluan')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function edit($id) {
        $data = $data = Keperluan::get();
        $selected = Keperluan::where('id',$id)->first();
        return view('admin.keperluan.update', compact(['data','selected']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request, [
            'nama_keperluan' => 'required',
            'keterangan' => 'required'
        ]);
        if ($rules) {
            $data = Keperluan::where('id',$id)->first();
            $data->nama_keperluan = $request->nama_keperluan;
            $data->keterangan = $request->keterangan;
            if($data->save()) {
                return redirect('admin/keperluan')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/keperluan')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function destroy($id) {
        $data = Keperluan::where('id', $id)->first();
        if($data->delete()) {
            return redirect('admin/keperluan')->with('success','Data Berhasil Dihapus !');
        } else {
            return redirect('admin/keperluan')->with('failed','Data Gagal Dihapus !');
        }
    }
}
