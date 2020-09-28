@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/register/penduduk') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="no_kk" class="col-form-label mb-0 pl-0 pb-0">Nomor KK</label>
                                <input id="no_kk" type="text" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" value="{{ old('no_kk') }}" required autocomplete="no_kk" autofocus>

                                @error('no_kk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nik" class="col-form-label mb-0 pl-0 pb-0">NIK</label>
                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name" class="col-form-label mb-0 pl-0 pb-0">Nama Penduduk</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="jenis_kelamin" class="col-form-label mb-0 pl-0 pb-0">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" autofocus>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="agama" class="col-form-label mb-0 pl-0 pb-0">Agama</label>
                                <select id="agama" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Protestan">Hindu</option>
                                    <option value="Protestan">Buddha</option>
                                    <option value="Protestan">Konghucu</option>
                                </select>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="tempat_lahir" class="col-form-label mb-0 pl-0 pb-0">Tempat Lahir</label>
                                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>

                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="tanggal_lahir" class="col-form-label mb-0 pl-0 pb-0">Tanggal Lahir</label>
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="pendidikan" class="col-form-label mb-0 pl-0 pb-0">Pendidikan</label>
                                <select id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}" required autocomplete="pendidikan" autofocus>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="pekerjaan" class="col-form-label mb-0 pl-0 pb-0">pekerjaan</label>
                                <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}" required autocomplete="pekerjaan" autofocus>

                                @error('pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="status_perkawinan" class="col-form-label mb-0 pl-0 pb-0">Status Perkawinan</label>
                                <select id="status_perkawinan" class="form-control @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan" value="{{ old('status_perkawinan') }}" required autocomplete="status_perkawinan" autofocus>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Janda">Janda</option>
                                    <option value="Duda">Duda</option>
                                </select>
                                @error('status_perkawinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="status_dalam_keluarga" class="col-form-label mb-0 pl-0 pb-0">Status Dalam Keluarga</label>
                                <select id="status_dalam_keluarga" class="form-control @error('status_dalam_keluarga') is-invalid @enderror" name="status_dalam_keluarga" value="{{ old('status_dalam_keluarga') }}" required autocomplete="status_dalam_keluarga" autofocus>
                                    <option value="Ayah">Ayah</option>
                                    <option value="Ibu">Ibu</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Kakek">Kakek</option>
                                    <option value="Nenek">Nenek</option>
                                    <option value="Saudara">Saudara</option>
                                </select>
                                @error('status_dalam_keluarga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="nama_ayah" class="col-form-label mb-0 pl-0 pb-0">Nama Ayah</label>
                                <input id="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{ old('nama_ayah') }}" required autocomplete="nama_ayah" autofocus>

                                @error('nama_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nama_ibu" class="col-form-label mb-0 pl-0 pb-0">Nama Ibu</label>
                                <input id="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ old('nama_ibu') }}" required autocomplete="nama_ibu" autofocus>

                                @error('nama_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="kewarganegaraan" class="col-form-label mb-0 pl-0 pb-0">Kewarganegaraan</label>
                                <select id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" required autocomplete="kewarganegaraan" autofocus>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                                @error('kewarganegaraan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="alamat" class="col-form-label mb-0 pl-0 pb-0">Alamat Lengkap</label>
                                <textarea id="alamat" type="textarea" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus></textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="password" class="col-form-label mb-0 pl-0 pb-0">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="password-confirm" class="col-form-label mb-0 pl-0 pb-0 text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
