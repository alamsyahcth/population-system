@extends('admin/layouts/app')
@section('title','Pengumuman')
@section('content')
<section>
  @include('admin/layouts/alert')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{ url('admin/pengumuman/create') }}" class="btn btn-success">Buat Pengumuman Baru</a>
        </div>
        <div class="card-body">
          <table id="example1" class="table">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="25%">Judul</th>
                <th width="45%">Isi Pengumuman</th>
                <th width="20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $d->title }}</td>
                <td>{{ $d->content }}</td>
                <td>
                  <a href="{{ url('admin/pengumuman/edit/'.$d->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                  <a href="{{ url('admin/pengumuman/destroy/'.$d->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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