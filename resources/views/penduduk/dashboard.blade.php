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
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Jenis Layanan</th>
            <th>Status</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>5 Juni 2020</td>
            <td>Buat Surat Pengantar</td>
            <td><div class="badge badge-sm bg-success">Sudah Dikonfirmasi</div></td>
            <td><a href="#" class="btn btn-outline-primary btn-rounded">View</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection