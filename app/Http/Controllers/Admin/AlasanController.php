<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alasan;

class AlasanController extends Controller {
    public function index() {
        $data = Alasan::get();
        return view('admin.alasan.index', compact(['data']));
    }

    public function store(Request $request) {
        $rules = $this->validate($request, [
            'nama_alasan' => 'required',
            'keterangan' => 'required'
        ]);
        if ($rules) {
            $data = new Alasan;
            $data->nama_alasan = $request->nama_alasan;
            $data->keterangan = $request->keterangan;
            if($data->save()) {
                return redirect('admin/alasan')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/alasan')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function edit($id) {
        $data = $data = Alasan::get();
        $selected = Alasan::where('id',$id)->first();
        return view('admin.alasan.update', compact(['data','selected']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request, [
            'nama_alasan' => 'required',
            'keterangan' => 'required'
        ]);
        if ($rules) {
            $data = Alasan::where('id',$id)->first();
            $data->nama_alasan = $request->nama_alasan;
            $data->keterangan = $request->keterangan;
            if($data->save()) {
                return redirect('admin/alasan')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/alasan')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function destroy($id) {
        $data = Alasan::where('id', $id)->first();
        if($data->delete()) {
            return redirect('admin/alasan')->with('success','Data Berhasil Dihapus !');
        } else {
            return redirect('admin/alasan')->with('failed','Data Gagal Dihapus !');
        }
    }
}
