<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\TempPenduduk;

class TempPendudukController extends Controller {

    public function index() {
        $data = TempPenduduk::get();
        $status = 1;
        return view('admin.edit-data.index',compact(['data','status']));
    }

    public function show($id) {
        $data = TempPenduduk::get();
        $selected = TempPenduduk::where('id', $id)->first();
        $status = 2;
        return view('admin.edit-data.index',compact(['data','selected','status']));
    }

    public function terima($id) {
        $data = TempPenduduk::where('id_penduduk', $id)->first();
        $update = Penduduk::where('id',$id)->update([
                'nik' => $data->nik,
                'name' => $data->name,
                'jenis_kelamin' => $data->jenis_kelamin,
                'tempat_lahir' => $data->tempat_lahir,
                'tanggal_lahir' => $data->tanggal_lahir,
                'agama' => $data->agama,
                'pendidikan' => $data->pendidikan,
                'pekerjaan' => $data->pekerjaan,
                'status_perkawinan' => $data->status_perkawinan,
                'status_dalam_keluarga' => $data->status_dalam_keluarga,
                'kewarganegaraan' => $data->kewarganegaraan,
                'nama_ayah' => $data->nama_ayah,
                'nama_ibu' => $data->nama_ibu,
                'alamat' => $data->alamat,
            ]);
        if($update) {
            if(TempPenduduk::where('id_penduduk',$id)->delete()) {
                return redirect('admin/edit-data')->with('success','Perubahan Data Berhasil Diubah');
            }
        }
    }

    public function tolak($id) {
        if(TempPenduduk::where('id_penduduk',$id)->delete()) {
            return redirect('admin/edit-data')->with('success','Perubahan Data Berhasil Ditolak');
        } else {
			 return redirect('admin/edit-data')->with('failed','Perubahan Data Gagal Ditolak');
		}
	}

}
