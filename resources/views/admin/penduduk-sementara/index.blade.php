@extends('admin/layouts/app')
@section('title','Penduduk Tetap')
@section('content')
<section>
  @include('admin/layouts/alert')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="20%">NIK</th>
                <th width="30%">Nomor KK</th>
                <th width="35%">Nama</th>
                <th width="10%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $d->nik }}</td>
                <td>{{ $d->no_kk_penduduk_sementara }}</td>
                <td>{{ $d->name }}</td>
                <td>
                  <a href="{{ url('admin/penduduk-sementara/edit/'.$d->id_penduduk) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection