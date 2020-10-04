@extends('penduduk/layouts/app')
@section('title','Pelayanan')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Surat Pengantar</h1>
    <h5>Buat surat pengantar pelayanan warga</h5>
    @include('penduduk/layouts/alert')
  </div>
  <div class="col-md-12 col-sm-12 mt-4">
    <div class="card p-3">
      <div class="card-body row">
        <div class="col-md-12">
          <h4 class="text-primary mb-3">Pilih Keperluan</h4>
          <form method="POST" action="{{ url('penduduk/pelayanan/add') }}">
            @csrf
            <div class="form-group row d-flex align-items-center">
              <div class="col-md-4">
                <label for="id_keperluan" class="col-form-label">Keperluan</label>
                <select id="keperluan" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" value="{{ old('keperluan') }}" required autocomplete="keperluan" autofocus>
                  <option disabled selected>Pilih keperluan</option>
                  @foreach($keperluan as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_keperluan }}</option>
                  @endforeach
                </select>
                @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6 mt-1">
                <label for="keterangan" class="col-form-label mb-0 pl-0 pb-0">Tujuan Pembuatan Layanan Tersebut</label>
                  <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('name') }}" required autocomplete="keterangan" autofocus>

                  @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-12">
          <h4 class="text-primary mb-3 mt-3">B. Data Pelayanan</h4>
          <?php $i=1; ?>
          @foreach(Cart::getContent() as $item)
          <div class="row d-flex align-items-center bg-dark-2 p-3 rounded mb-3">
            <div class="col-md-1"><h6 class="mb-0">{{$i++}}</h6></div>
            <div class="col-md-2"><h6 class="mb-0">
              @foreach($keperluan as $k)
                @if($k->id == $item->name)
                  <h6 class="text-primary mt-2">{{ $k->nama_keperluan }}</h6>
                @endif
              @endforeach
            </div>
            <div class="col-md-8"><p class="m-0">Alasan Pembuatan Surat Pengantar</p><h6 class="mb-0">{{ $item->price }}</h6></div>
            <div class="col-md-1"><a href="{{ url('/penduduk/pelayanan/remove/'.$item->id) }}" class="btn btn-danger btn-sm text-light"><span style="font-weight:700;">X</span></a></div>
          </div>
          @endforeach
          <div class="mt-4 bg-light p-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1" required>
              <label class="custom-control-label" for="customCheck1">
                <p>
                  Berdasarkan data diatas, saya <span style="font-weight: 700">{{ Auth::user()->name }}-{{ Auth::user()->nik }}</span> mengajukan surat pelayanan ini dengan maksud dan tujuan yang telah tertera, saya bersedia mempertanggungjawabkan semua data yang saya ajukan diatas.
                </p>
              </label>
            </div>
          </div>

          <a href="{{ url('penduduk/pelayanan/save') }}" class="btn btn-primary btn-lg mt-3">Kirim</a>
          <a href="{{ url('penduduk/pelayanan/remove-all') }}" class="btn btn-outline-primary btn-lg mt-3">Batal</a>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection