@extends('admin/layouts/app')
@section('title','Penduduk')
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
                <th width="35%">Nama</th>
                <th width="35%">Status</th>
                <th width="10%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $d->nik }}</td>
                <td>{{ $d->name }}</td>
                <td>
                  @foreach ($tetap as $t)
                    @if($t->id_penduduk == $d->id)
                      <div class="badge badge-primary">Penduduk Tetap</div>
                    @endif
                  @endforeach
                  @foreach ($sementara as $s)
                    @if($s->id_penduduk == $d->id)
                      <div class="badge badge-warning">Penduduk Sementara</div>
                    @endif
                  @endforeach
                </td>
                <td>
                  @foreach ($tetap as $t)
                    @if($t->id_penduduk == $d->id)
                      <a href="{{ url('admin/penduduk-tetap/edit/'.$d->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                    @endif
                  @endforeach
                  @foreach ($sementara as $s)
                    @if($s->id_penduduk == $d->id)
                      <a href="{{ url('admin/penduduk-sementara/edit/'.$d->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                    @endif
                  @endforeach
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