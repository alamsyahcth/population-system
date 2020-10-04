<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PendudukSementara;
use App\Models\Keluarga;

class PendudukSementaraController extends Controller {
    public function index() {
        $data = PendudukSementara::join('penduduks','penduduks.id','=','penduduk_sementaras.id_penduduk')
                    ->where('status','=','1')
                    ->select('*','penduduk_sementaras.no_kk as no_kk_penduduk_sementara')
                    ->get();
        return view('admin.penduduk-sementara.index', compact(['data']));
    }

    public function edit($id) {
        $data = PendudukSementara::join('penduduks','penduduks.id','=','penduduk_sementaras.id_penduduk')
                ->where('penduduks.id',$id)
                ->select('*','penduduk_sementaras.no_kk as no_kk_penduduk_sementara')
                ->first();
        return view('admin.penduduk-sementara.update', compact(['data']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request,[
            'nik' => ['required', 'max:255'],
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'status_dalam_keluarga' => 'required',
            'kewarganegaraan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
        ]);

        if($rules) {
            $update = Penduduk::where('id',$id)->update([
                'nik' => $request->nik,
                'name' => $request->name,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'status_perkawinan' => $request->status_perkawinan,
                'status_dalam_keluarga' => $request->status_dalam_keluarga,
                'kewarganegaraan' => $request->kewarganegaraan,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'alamat' => $request->alamat,
            ]);

            if($update) {
                return redirect('admin/penduduk-sementara')->with('success','Data Penduduk Berhasil Diubah');
            } else {
                return redirect('admin/penduduk-sementara')->with('failed','Data Penduduk Gagal Diubah');
            }
        }
    }
}
