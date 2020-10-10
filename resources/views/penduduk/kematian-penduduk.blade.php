@extends('penduduk/layouts/app')
@section('title','Kematian Penduduk')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Laporan Kematian Penduduk</h1>
    <h5>Buat Laporan Kematian Penduduk</h5>
    @include('penduduk/layouts/alert')
  </div>
  <div class="col-md-12 col-sm-12 mt-4">
    <div class="card p-3">
      <form method="POST" action="{{ url('/penduduk/kematian-penduduk/create') }}">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <label for="id_penduduk" class="col-form-label mb-0 pl-0 pb-2">Pilih Penduduk Yang Meninggal</label>
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
            <label for="tgl_kematian" class="col-form-label mb-0 pl-0 pb-0">Tanggal Kematian</label>
            <input id="tgl_kematian" type="date" class="form-control @error('tgl_kematian') is-invalid @enderror" name="tgl_kematian" value="{{ old('tgl_kematian') }}" required autocomplete="tgl_kematian" autofocus>

            @error('tgl_kematian')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="waktu_kematian" class="col-form-label mb-0 pl-0 pb-0">Waktu Kematian</label>
            <input id="waktu_kematian" type="time" class="form-control @error('waktu_kematian') is-invalid @enderror" name="waktu_kematian" value="{{ old('waktu_kematian') }}" required autocomplete="waktu_kematian" autofocus>

            @error('waktu_kematian')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="lokasi_kematian" class="col-form-label mb-0 pl-0 pb-0">Lokasi Kematian</label>
            <input id="lokasi_kematian" type="text" class="form-control @error('lokasi_kematian') is-invalid @enderror" name="lokasi_kematian" value="{{ old('lokasi_kematian') }}" required autocomplete="lokasi_kematian" autofocus>

            @error('lokasi_kematian')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="penyebab" class="col-form-label mb-0 pl-0 pb-0">Penyebab Kematian</label>
            <input id="penyebab" type="text" class="form-control @error('penyebab') is-invalid @enderror" name="penyebab" value="{{ old('penyebab') }}" required autocomplete="penyebab" autofocus>

            @error('penyebab')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-12">
              <button type="submit" class="btn btn-lg btn-primary btn-block">
                {{ __('Laporkan Kematian') }}
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection