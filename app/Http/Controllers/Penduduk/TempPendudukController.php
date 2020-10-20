<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\TempPenduduk;
use Auth;

class TempPendudukController extends Controller {

    public function index() {
        $data = Penduduk::where('id', Auth::user()->id)->first();
        $status = TempPenduduk::where('id_penduduk', Auth::user()->id)->count();
        return view('penduduk.edit-data', compact(['data','status']));
    }

    public function store(Request $request) {
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
            $data = new TempPenduduk;
            $data->id_penduduk = $request->id_penduduk;
            $data->no_kk = 'default';
            $data->nik = $request->nik;
            $data->name = $request->name;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->agama = $request->agama;
            $data->pendidikan = $request->pendidikan;
            $data->pekerjaan = $request->pekerjaan;
            $data->status_perkawinan =  $request->status_perkawinan;
            $data->status_dalam_keluarga = $request->status_dalam_keluarga;
            $data->kewarganegaraan = $request->kewarganegaraan;
            $data->nama_ayah = $request->nama_ayah;
            $data->nama_ibu = $request->nama_ibu;
            $data->alamat = $request->alamat;
            $data->status = '1';

            if($data->save()) {
                return redirect('penduduk/edit-data')->with('success','Data berhasil disimpan, harap untuk menghubungi pengurus RT untuk persetujuan perubahan data');
            }
        }
    }


}
