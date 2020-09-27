@extends('admin/layouts/app')
@section('title','Alasan Penduduk Sementara')
@section('content')
<section>
  @include('admin/layouts/alert')
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-dark">
          <div class="d-flex justify-content-between align-self-center">
            <h6 class="mt-2"><i class="fas fa-plus mr-3"></i> Tambah data</h6>
            <a href="{{ url('admin/alasan') }}" class="btn btn-success">Tambah Data</a>
          </div>
        </div>
        <div class="card-body m-0">
          <form class="form-horizontal" action="{{ url('admin/alasan/store') }}" method="post">
            @csrf
            <div class="form">
              <div class="form-group">
                <input type="text" name="nama_alasan" class="form-control @error('nama_alasan') is-invalid @enderror" autocomplete="nama_alasan" placeholder="alasan"/>
                @error('nama_alasan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <textarea type="textarea" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" autocomplete="keterangan" placeholder="Keterangan"></textarea>
                @error('keterangan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="25%">alasan</th>
                <th width="45%">Keterangan</th>
                <th width="20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $d->nama_alasan }}</td>
                <td>{{ $d->keterangan }}</td>
                <td>
                  <a href="{{ url('admin/alasan/edit/'.$d->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                  <a href="{{ url('admin/alasan/destroy/'.$d->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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