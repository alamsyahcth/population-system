<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PendudukTetap;
use App\Models\Keluarga;

class PendudukTetapController extends Controller {

    public function index() {
        $data = PendudukTetap::join('penduduks','penduduks.id','=','penduduk_tetaps.id_penduduk')
                    ->join('keluargas','keluargas.id','=','penduduk_tetaps.id_keluarga')
                    ->where('status','=','1')
                    ->select('*','keluargas.no_kk as no_kk_keluarga','penduduk_tetaps.id_keluarga as id_keluarga_show')
                    ->get();
        return view('admin.penduduk-tetap.index', compact(['data']));
    }

    public function edit($id) {
        $keluarga = Keluarga::get();
        $data = Penduduk::where('id',$id)->first();
        $selected_keluarga = Keluarga::join('penduduk_tetaps', 'penduduk_tetaps.id_keluarga','=','keluargas.id')
                            ->where('penduduk_tetaps.id_penduduk','=',$id)
                            ->select('keluargas.id as id_keluarga_show')
                            ->first();
        return view('admin.penduduk-tetap.update', compact(['data','keluarga','selected_keluarga']));
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
                return redirect('admin/penduduk-tetap')->with('success','Data Penduduk Berhasil Diubah');
            } else {
                return redirect('admin/penduduk-tetap')->with('failed','Data Penduduk Gagal Diubah');
            }
        }
    }
}
