@extends('penduduk/layouts/app')
@section('title','Dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1><span style="color: #707070">Selamat Datang</span> {{ Auth::user()->name }}</h1>
    <h5>Berikut history data pelayanan anda</h5>
  </div>
  <div class="col-md-12 col-sm-12 mt-4">
    <div class="card p-3">
      <ul class="timeline pr-5">
          @if($count != 0)
            @foreach($data as $d)
            <li class="pb-3">
              <h6 class="mb-3">
                <span class="mr-3">{{ $d->no_sp }}</span>
                <span>{{ $d->tanggal }}</span>
                @if($d->status_pelayanan== 1)<div class="badge badge-secondary">Belum Dilaporkan</div>@endif
                @if($d->status_pelayanan== 2)<div class="badge badge-success">Diterima</div>@endif
                @if($d->status_pelayanan== 3)<div class="badge badge-danger">Ditolak</div>@endif
              </h6>
              <?php $i = 1; ?>
              @foreach($keperluan as $k)
                @if($k->no_sp == $d->no_sp)
                  <div class="row mb-1">
                    <div class="col-md-12 bg-light p-2 rounded d-flex">
                      <p class="mr-2 mt-1">{{ $i++ }}</p class="mr-2">
                      <div>
                        <p class="my-1" style="font-weight: 700">{{ $k->nama_keperluan }}</p>
                        <p class="my-1">{{ $k->detail_pelayanan_keterangan }}</p>
                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
            </li>
            @endforeach
          @else 
            <li>
              <h6 class="text-secondary">Belum Ada Data Pelayanan</h6>
            </li>
          @endif
        </ul>
    </div>
  </div>
</div>
@endsection