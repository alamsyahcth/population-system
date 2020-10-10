@extends('penduduk/layouts/app')
@section('title','Kematian Penduduk')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Laporan Penduduk Keluar</h1>
    <h5>Buat Laporan Penduduk Keluar</h5>
    @include('penduduk/layouts/alert')
  </div>
  <div class="col-md-12 col-sm-12 mt-4">
    <div class="card p-3">
      <form method="POST" action="{{ url('/penduduk/penduduk-keluar/create') }}">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <label for="id_penduduk" class="col-form-label mb-0 pl-0 pb-2">Pilih Penduduk Yang Keluar</label>
            <select id="id_penduduk" class="form-control js-example-basic-single @error('id_penduduk') is-invalid @enderror" name="id_penduduk" value="{{ old('id_penduduk') }}" required autocomplete="id_penduduk" autofocus>
              <option disabled selected>Pilih Penduduk</option>
              @foreach($penduduk as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
              @endforeach
            </select>
            @error('id_penduduk')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="tanggal_keluar" class="col-form-label mb-0 pl-0 pb-0">Tanggal Keluar</label>
            <input id="tanggal_keluar" type="date" class="form-control @error('tanggal_keluar') is-invalid @enderror" name="tanggal_keluar" value="{{ old('tanggal_keluar') }}" required autocomplete="tanggal_keluar" autofocus>

            @error('tanggal_keluar')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="alasan_keluar" class="col-form-label mb-0 pl-0 pb-0">Alasan Keluar</label>
            <input id="alasan_keluar" type="text" class="form-control @error('alasan_keluar') is-invalid @enderror" name="alasan_keluar" value="{{ old('alasan_keluar') }}" required autocomplete="alasan_keluar" autofocus>

            @error('alasan_keluar')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="alamat_tujuan" class="col-form-label mb-0 pl-0 pb-0">Alamat Tujuan</label>
            <textarea id="alamat_tujuan" type="textarea" class="form-control @error('alamat_tujuan') is-invalid @enderror" name="alamat_tujuan" value="{{ old('alamat_tujuan') }}" required autocomplete="alamat_tujuan" height="400" autofocus></textarea>

            @error('alamat_tujuan')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-12">
              <button type="submit" class="btn btn-lg btn-primary btn-block">
                {{ __('Laporkan Penduduk Keluar') }}
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection