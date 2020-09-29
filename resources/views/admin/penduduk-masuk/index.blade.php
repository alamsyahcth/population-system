@extends('admin/layouts/app')
@section('title','Penduduk Masuk')
@section('content')
<section>
  @include('admin/layouts/alert')
  <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Data Terbaru</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">History</a>
    </li>
  </ul>
  <div class="tab-content" id="custom-content-above-tabContent">
    <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
      <div class="row">
        <div class="col-md-6 mt-3">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th width=30%>NIK</th>
                    <th width="50">Nama</th>
                    <th width="10%">Lihat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  @foreach($wait as $w)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $w->nik }}</td>
                    <td>{{ $w->name }}</td>
                    <td>
                      <a href="{{ url('admin/penduduk-masuk/view/'.$w->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
      <div class="row">
        <div class="col-md-12 mt-3">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th width=20%>NIK</th>
                    <th width="50">Nama</th>
                    <th width="10">Status</th>
                    <th width="10%">Lihat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  @foreach($confirm as $c)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $c->nik }}</td>
                    <td>{{ $c->name }}</td>
                    <td>
                      @if($c->status == '1')
                        <span class="badge badge-success">Aktif</span>
                      @endif
                      @if($c->status == '3')
                        <span class="badge badge-danger">Ditolak</span>
                      @endif
                      @if($c->status == '4')
                        <span class="badge badge-secondary">Keluar</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ url('admin/penduduk-masuk/view/'.$c->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection