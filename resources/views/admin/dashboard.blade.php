@extends('admin/layouts/app')
@section('title','Dashboard')
@section('content')
<section id="dashboard-card">
  <div class="row">
    <div class="col-lg-4 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $pelayanan }}</h3>

          <p>Jumlah Pelayanan</p>
        </div>
        <div class="icon">
          <i class="fas fa-file-alt"></i>
        </div>
        <a href="{{ url('admin/pelayanan') }}" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $masuk }}</h3>

          <p>Data Penduduk Masuk</p>
        </div>
        <div class="icon">
          <i class="fas fa-sign-in-alt"></i>
        </div>
        <a href="{{ url('admin/penduduk-masuk') }}" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $keluar }}</h3>

          <p>Data Penduduk Keluar</p>
        </div>
        <div class="icon">
          <i class="fas fa-sign-out-alt"></i>
        </div>
        <a href="{{ url('admin/penduduk-keluar') }}" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $kelahiran }}</h3>

          <p>Data Kelahiran Penduduk</p>
        </div>
        <div class="icon">
          <i class="fas fa-baby"></i>
        </div>
        <a href="{{ url('admin/kelahiran-penduduk') }}" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $kematian }}</h3>

          <p>Data Kematian Penduduk</p>
        </div>
        <div class="icon">
          <i class="fas fa-book-dead"></i>
        </div>
        <a href="{{ url('admin/kematian-penduduk') }}" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $aspirasi }}</h3>

          <p>Data Aspirasi</p>
        </div>
        <div class="icon">
          <i class="fas fa-headset"></i>
        </div>
        <a href="{{ url('admin/aspirasi') }}" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
  </div>
</section>
<section id="data-aspirasi">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body row">
          <div class="col-md-12 d-flex justify-content-between">
            <h4>Data Aspirasi Terbaru</h4>
            <a href="{{ url('admin/aspirasi') }}" class="btn btn-secondary">
              Tampil Data <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="timeline">
            @foreach($data_aspirasi as $d)
            <div>
              <i class="fas fa-envelope bg-blue"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">
                  <span class="text-primary" href="#">{{ $d->name }} </span> {{ $d->name_aspirasi }}
                  @if($d->status_aspirasi == 1)<div class="badge badge-primary ml-3">Belum Dilihat</div>@endif
                  @if($d->status_aspirasi == 2)<div class="badge badge-success ml-3">Diterima</div>@endif
                  @if($d->status_aspirasi == 3)<div class="badge badge-danger ml-3">Ditolak</div>@endif
                </h3>

                <div class="timeline-body py-3">
                  {{ $d->isi }}
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection