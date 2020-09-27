@extends('admin/layouts/app')
@section('title','Data Keluarga')
@section('content')
<section>
  @include('admin/layouts/alert')
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-dark">
          <div class="d-flex justify-content-between align-self-center">
            <h6 class="mt-2"><i class="fas fa-plus mr-3"></i> Tambah data</h6>
            <a href="{{ url('admin/keluarga') }}" class="btn btn-success">Tambah Data</a>
          </div>
        </div>
        <div class="card-body m-0">
          <form class="form-horizontal" action="{{ url('admin/keluarga/store') }}" method="post">
            @csrf
            <div class="form">
              <div class="form-group">
                <input type="number" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror" autocomplete="no_kk" placeholder="Nomor KK"/>
                @error('no_kk')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="nama_kepala_keluarga" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror" autocomplete="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga"/>
                @error('nama_kepala_keluarga')
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
                <th width="5%">No</th>
                <th width="25%">Nomor KK</th>
                <th width="40%">Nama Kepala Keluarga</th>
                <th width="30%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $d->no_kk }}</td>
                <td>{{ $d->nama_kepala_keluarga }}</td>
                <td>
                  <a href="{{ url('admin/keluarga/view/'.$d->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                  <a href="{{ url('admin/keluarga/edit/'.$d->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                  <a href="{{ url('admin/keluarga/destroy/'.$d->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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