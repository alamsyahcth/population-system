@extends('admin/layouts/app')
@section('title','Edit Data Penduduk Tetap')
@section('content')
<section>
  @include('admin/layouts/alert')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body m-0">
          <form method="POST" action="{{ url('/admin/penduduk-tetap/update/'.$data->id) }}">
            @csrf
            <div class="form-group row">
              {{-- <div class="col-md-12">
                <label for="keluarga" class="col-form-label mb-0 pl-0 pb-2">Pilih Keluarga</label>
                <select id="keluarga" class="form-control select2 @error('keluarga') is-invalid @enderror" name="keluarga" required autocomplete="keluarga" autofocus>
                  <option disabled selected>Pilih Keluarga</option>
                  @foreach($keluarga as $k)
                    <option @if($k->id == $selected_keluarga->id_keluarga_show) selected @endif value="{{ $k->id }}">{{ $selected_keluarga->id_keluarga_show }} - {{ $k->nama_kepala_keluarga }}</option>
                  @endforeach
                </select>
                @error('keluarga')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div> --}}
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="nik" class="col-form-label mb-0 pl-0 pb-0">NIK</label>
                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $data->nik }}" required autocomplete="nik" autofocus>

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
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>

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
                <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" required autocomplete="jenis_kelamin" autofocus>
                  <option @if($data->jenis_kelamin == 'L') selected @endif value="L">Laki-laki</option>
                  <option @if($data->jenis_kelamin == 'P') selected @endif value="P">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="agama" class="col-form-label mb-0 pl-0 pb-0">Agama</label>
                <select id="agama" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ $data->agama }}" required autocomplete="agama" autofocus>
                  <option @if($data->agama == 'Islam') selected @endif value="Islam">Islam</option>
                  <option @if($data->agama == 'Protestan') selected @endif value="Protestan">Protestan</option>
                  <option @if($data->agama == 'Katolik') selected @endif value="Katolik">Katolik</option>
                  <option @if($data->agama == 'Hindu') selected @endif value="Hindu">Hindu</option>
                  <option @if($data->agama == 'Buddha') selected @endif value="Buddha">Buddha</option>
                  <option @if($data->agama == 'Konghucu') selected @endif value="Konghucu">Konghucu</option>
                </select>
                @error('agama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="col-md-3">
                <label for="tempat_lahir" class="col-form-label mb-0 pl-0 pb-0">Tempat Lahir</label>
                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required autocomplete="tempat_lahir" autofocus>

                @error('tempat_lahir')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="col-md-3">
                <label for="tanggal_lahir" class="col-form-label mb-0 pl-0 pb-0">Tanggal Lahir</label>
                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required autocomplete="tanggal_lahir" autofocus>

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
                <select id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ $data->pendidikan }}" required autocomplete="pendidikan" autofocus>
                  <option @if($data->pendidikan == 'Tidak Sekolah') selected @endif value="Tidak Sekolah">Tidak Sekolah</option>
                  <option @if($data->pendidikan == 'SD') selected @endif value="SD">SD</option>
                  <option @if($data->pendidikan == 'SMP') selected @endif value="SMP">SMP</option>
                  <option @if($data->pendidikan == 'SMA') selected @endif value="SMA">SMA</option>
                  <option @if($data->pendidikan == 'D1') selected @endif value="D1">D1</option>
                  <option @if($data->pendidikan == 'D2') selected @endif value="D2">D2</option>
                  <option @if($data->pendidikan == 'D3') selected @endif value="D3">D3</option>
                  <option @if($data->pendidikan == 'D4') selected @endif value="D4">D4</option>
                  <option @if($data->pendidikan == 'S1') selected @endif value="S1">S1</option>
                  <option @if($data->pendidikan == 'S2') selected @endif value="S2">S2</option>
                  <option @if($data->pendidikan == 'S3') selected @endif value="S3">S3</option>
                </select>
                @error('pendidikan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="pekerjaan" class="col-form-label mb-0 pl-0 pb-0">pekerjaan</label>
                <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ $data->pekerjaan }}" required autocomplete="pekerjaan" autofocus>

                @error('pekerjaan')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="status_perkawinan" class="col-form-label mb-0 pl-0 pb-0">Status Perkawinan</label>
                <select id="status_perkawinan" class="form-control @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan" value="{{ $data->status_perkawinan }}" required autocomplete="status_perkawinan" autofocus>
                  <option @if($data->status_perkawinan == 'Belum Kawin') selected @endif value="Belum Kawin">Belum Kawin</option>
                  <option @if($data->status_perkawinan == 'Kawin') selected @endif value="Kawin">Kawin</option>
                  <option @if($data->status_perkawinan == 'Janda') selected @endif value="Janda">Janda</option>
                  <option @if($data->status_perkawinan == 'Duda') selected @endif value="Duda">Duda</option>
                </select>
                @error('status_perkawinan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-3">
                  <label for="status_dalam_keluarga" class="col-form-label mb-0 pl-0 pb-0">Status Dalam Keluarga</label>
                  <select id="status_dalam_keluarga" class="form-control @error('status_dalam_keluarga') is-invalid @enderror" name="status_dalam_keluarga" value="{{ $data->status_dalam_keluarga }}" required autocomplete="status_dalam_keluarga" autofocus>
                    <option @if($data->status_dalam_keluarga == 'Ayah') selected @endif value="Ayah">Ayah</option>
                    <option @if($data->status_dalam_keluarga == 'Ibu') selected @endif value="Ibu">Ibu</option>
                    <option @if($data->status_dalam_keluarga == 'Anak') selected @endif value="Anak">Anak</option>
                    <option @if($data->status_dalam_keluarga == 'Kakek') selected @endif value="Kakek">Kakek</option>
                    <option @if($data->status_dalam_keluarga == 'Nenek') selected @endif value="Nenek">Nenek</option>
                    <option @if($data->status_dalam_keluarga == 'Saudara') selected @endif value="Saudara">Saudara</option>
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
                  <input id="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{ $data->nama_ayah }}" required autocomplete="nama_ayah" autofocus>

                  @error('nama_ayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="col-md-6">
                <label for="nama_ibu" class="col-form-label mb-0 pl-0 pb-0">Nama Ibu</label>
                <input id="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ $data->nama_ibu }}" required autocomplete="nama_ibu" autofocus>

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
                    <select id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" value="{{ $data->kewarganegaraan }}" required autocomplete="kewarganegaraan" autofocus>
                        <option @if($data->kewarganegaraan == 'WNI') selected @endif value="WNI">WNI</option>
                        <option @if($data->kewarganegaraan == 'WNA') selected @endif value="WNA">WNA</option>
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
                <textarea id="alamat" type="textarea" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}" required autocomplete="alamat" height="400" autofocus>{{ $data->alamat }}</textarea>

                @error('alamat')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-12">
                <button type="submit" class="btn btn-lg btn-primary btn-block">
                  {{ __('Simpan') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection