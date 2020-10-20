@extends('admin/layouts/app')
@section('title','Laporan Pelayanan')
@section('content')
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal" method="post" action="{{ url('/admin/laporan/get-laporan') }}" enctype="multipart/form-data">
              <div class="form-group">
                @csrf
                <div class="row">
                  <div class="col-md-12 text-center pb-3 mt-3">
                    <h4 class="text-dark">Harap Isi Tanggal Awal dan Tanggal Akhir Laporan</h4>
                  </div>
                  <input type="hidden" name="sort" value="laporan_pelayanan">
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fas fa-calendar mr-3"></i></span>
                      </div>
                      <input type="date" name="date_start" class="form-control @if ($message = Session::get('failed')) is-invalid @endif  @error('date_start') is-invalid @enderror" autocomplete="date_start" placeholder="Tanggal Awal" aria-label="Username" aria-describedby="basic-addon1">
                      @error('date_start')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      @if ($message = Session::get('failed'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fas fa-calendar mr-3"></i></span>
                      </div>
                      <input type="date" name="date_end" class="form-control @error('date_end') is-invalid @enderror" autocomplete="date_end" placeholder="Tanggal Akhir" aria-label="Username" aria-describedby="basic-addon1">
                      @error('date_end')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" value="Cetak PDF" class="btn btn-danger btn-md btn-block mt-3">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection