<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Masuk;
use App\Models\PendudukSementara;
use App\Models\PendudukTetap;
use App\Models\Keluarga;
use App\Models\Alasan;
use Auth;

class PendudukMasukController extends Controller {

    use RegistersUsers;

    public function index() {
        $keluarga = Keluarga::get();
        $alasan = Alasan::get();
        return view('penduduk.penduduk-masuk', compact(['keluarga','alasan']));
    }

    public function create_penduduk_tetap(Request $request) {
        $rules = $this->validate($request,[
            'keluarga' => 'required',
            'nik' => ['required', 'max:255', 'unique:penduduks'],
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
            'alasan' => 'required',
            'password' => ['required','min:8', 'confirmed'],
        ]);

        if($rules) {
            $data = new Penduduk;
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
            $data->status = '2';
            $data->status_penduduk = 'Masuk';
            $data->password= Hash::make($request->password);

            if($data->save()) {
                $get = Penduduk::where('nik',$request->nik)->first();        
                $keluarga = new PendudukTetap;
                $keluarga->id_keluarga = $request->keluarga;
                $keluarga->id_penduduk = $get->id;
                $keluarga->save();
                $masuk = new Masuk;
                $masuk->id_penduduk = $get->id;
                $masuk->alasan = $request->alasan;
                $masuk->nik_pelapor = Auth::user()->nik;
                $masuk->nama_pelapor = Auth::user()->name;
                
                if($masuk->save()) {
                    return redirect('penduduk/penduduk-masuk')->with('success','Data Berhasil Disimpan, Segera Melapor Ke Pengurus RT Dengan Membawa Dokumen Yang Dibutuhkan');
                }
            }
        }
    }

    public function create_penduduk_sementara(Request $request) {
        $rules = $this->validate($request,[
            'no_kk' => 'required',
            'nik' => ['required', 'max:255', 'unique:penduduks'],
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
            'kepentingan' => 'required',
            'alasan' => 'required',
            'password' => ['required','min:8', 'confirmed'],
        ]);

        if($rules) {
            $data = new Penduduk;
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
            $data->status = '2';
            $data->status_penduduk = 'Masuk';
            $data->password= Hash::make($request->password);

            if($data->save()) {
                $get = Penduduk::where('nik',$request->nik)->first();        
                $sementara = new PendudukSementara;
                $sementara->id_penduduk = $get->id;
                $sementara->id_sementara = $request->kepentingan;
                $sementara->no_kk = $request->no_kk;
                $sementara->keterangan = $request->alasan;
                $sementara->save();
                $masuk = new Masuk;
                $masuk->id_penduduk = $get->id;
                $masuk->alasan = $request->alasan;
                $masuk->nik_pelapor = Auth::user()->nik;
                $masuk->nama_pelapor = Auth::user()->name;
                
                if($masuk->save()) {
                    return redirect('penduduk/penduduk-masuk')->with('success','Data Berhasil Disimpan, Segera Melapor Ke Pengurus RT Dengan Membawa Dokumen Yang Dibutuhkan');
                }
            }
        }
    }
}
