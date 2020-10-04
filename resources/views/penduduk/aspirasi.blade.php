@extends('penduduk/layouts/app')
@section('title','Dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Aspirasi Anda</h1>
    <h5>Salurkan Aspirasi Anda</h5>
    @include('penduduk/layouts/alert')
  </div>
  <div class="col-md-12 col-sm-12 mt-4">
    <div class="card p-3">
      <div class="card-body">
        <ul class="timeline pr-5">
          <li style="padding-bottom: 50px;">
            <form method="POST" action="{{ url('/penduduk/aspirasi/store') }}">
              @csrf
              <div class="form">
                <div class="form-group">
                  <label for="id_kategori_aspirasi" class="col-form-label mb-0 pl-0 pb-2">Kategori Aspirasi</label>
                    <select id="id_kategori_aspirasi" class="form-control @error('id_kategori_aspirasi') is-invalid @enderror" name="id_kategori_aspirasi" value="{{ old('id_kategori_aspirasi') }}" required autocomplete="id_kategori_aspirasi" autofocus>
                      <option disabled selected>Pilih Kategori Aspirasi</option>
                      @foreach($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->name_aspirasi }}</option>
                      @endforeach
                    </select>
                    @error('id_kategori_aspirasi')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                  <label for="isi" class="col-form-label mb-0 pl-0 pb-0">Isi Aspirasi</label>
                  <textarea id="isi" type="textarea" class="form-control @error('isi') is-invalid @enderror" name="isi" value="{{ old('isi') }}" required autocomplete="isi" height="400" autofocus></textarea>
                  @error('isi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group row mb-0">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                      {{ __('Sampaikan Asprasi Saya') }}
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </li>
          @if($count != 0)
            @foreach($data as $d)
            <li class="pb-3">
              <h6 class="mb-0">
                {{ $d->isi }}
                @if($d->status== 2)<div class="badge badge-success">Diterima</div>@endif
                @if($d->status== 3)<div class="badge badge-danger">Ditolak</div>@endif
              </h6>
              <p>{{ $d->created_at }}</p>
              @foreach($balasan as $b)
                @if($b->id_aspirasi == $d->id_aspirasi)
                  <hr>
                  <div class="bg-dark-2 p-2 rounded">
                    <p class="text-secondary m-0">Balasan dari pengurus RT</p>
                    <h6>
                      {{ $b->isi_balasan }}
                    </h6>
                  </div>
                @endif
              @endforeach
            </li>
            @endforeach
          @else 
            <li>
              <h6 class="text-secondary">Belum Ada Aspirasi dari Anda</h6>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection