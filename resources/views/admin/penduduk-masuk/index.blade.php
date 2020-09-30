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
          <div class="card h-100">
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
                      <a href="{{ url('admin/penduduk-masuk/'.$w->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-3">
          <div class="card h-100">
            <div class="card-body">
              @if($status == 1)
                <div class="row">
                    <div class="col-md-12">
                      <h6 style="font-weight: 700">A. Data Penduduk Baru</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Keluarga</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">NIK</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Jenis Kelamin</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Tempat Lahir</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Tanggal Lahir</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Agama</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Pendidikan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status Perkawinan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status Keluarga</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Kewarganegaraan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama Ayah</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama Ibu</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Alamat</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-12">
                      <h6 style="font-weight: 700">B. Data Laporan</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Waktu</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Pelapor</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Alasan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-12 bg-secondary p-2 mb-3" style="border-radius: 10px;">
                      <p>Berdasarkan data diatas dan dokumen sebagai bukti pelaporan pihak pengurus RT.003 RW.003 Kelurahan Sawah Baru menyatakan bahwa pelapor:</p>
                    </div>
                    <div class="col-md-12">
                      <button href="#" class="btn btn-success" disabled>Terima & Cetak</button>
                      <button href="#" class="btn btn-danger" disabled>Tolak</button>
                    </div>
                  </div>
              @else
                @if($status == 2)
                  <div class="row">
                    <div class="col-md-12">
                      <h6 style="font-weight: 700">A. Data Penduduk Baru</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Keluarga</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $keluarga->no_kk }} - {{$keluarga->nama_kepala_keluarga }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">NIK</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->nik }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->name }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Jenis Kelamin</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      @if($tetap->jenis_kelamin == 'L')
                        <p>Laki-laki</p>
                      @else
                        <p>Perempuan</p>
                      @endif
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Tempat Lahir</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->tempat_lahir }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Tanggal Lahir</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->tanggal_lahir }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Agama</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->agama }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Pendidikan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->pendidikan }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status Perkawinan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->status_perkawinan }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status Keluarga</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->status_dalam_keluarga }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Kewarganegaraan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->kewarganegaraan }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama Ayah</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->nama_ayah }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama Ibu</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->nama_ibu }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Alamat</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->alamat }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p class="text-primary">Tetap</p>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-12">
                      <h6 style="font-weight: 700">B. Data Laporan</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Waktu</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->created_at }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Pelapor</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->nik_pelapor }} - {{ $tetap->nama_pelapor }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Alasan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $tetap->alasan }}</p>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-12 bg-secondary p-2 mb-3" style="border-radius: 10px;">
                      <p>Berdasarkan data diatas dan dokumen sebagai bukti pelaporan pihak pengurus RT.003 RW.003 Kelurahan Sawah Baru menyatakan bahwa pelapor:</p>
                    </div>
                    <div class="col-md-12">
                      <a href="{{ url('admin/penduduk-masuk/terima/'.$tetap->id_penduduk) }}" class="btn btn-success">Terima & Cetak</a>
                      <a href="{{ url('admin/penduduk-masuk/tolak/'.$tetap->id_penduduk) }}" class="btn btn-danger">Tolak</a>
                    </div>
                  </div>

                @elseif($status == 3)
                  <div class="row">
                    <div class="col-md-12">
                      <h6 style="font-weight: 700">A. Data Penduduk Baru</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Keluarga</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->no_kk }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">NIK</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->nik }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->name }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Jenis Kelamin</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      @if($sementara->jenis_kelamin == 'L')
                        <p>Laki-laki</p>
                      @else
                        <p>Perempuan</p>
                      @endif
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Tempat Lahir</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->tempat_lahir }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Tanggal Lahir</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->tanggal_lahir }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Agama</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->agama }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Pendidikan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->pendidikan }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status Perkawinan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->status_perkawinan }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status Keluarga</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->status_dalam_keluarga }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Kewarganegaraan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->kewarganegaraan }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama Ayah</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->nama_ayah }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Nama Ibu</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->nama_ibu }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Alamat</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->alamat }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Status</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p class="text-secondary">sementara</p>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-12">
                      <h6 style="font-weight: 700">B. Data Laporan</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Waktu</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->created_at }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Pelapor</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->nik_pelapor }} - {{ $sementara->nama_pelapor }}</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <p class="text-label">Alasan</p>
                    </div>
                    <div class="col-md-1">
                      <p>:</p>
                    </div>
                    <div class="col-md-8">
                      <p>{{ $sementara->alasan }}</p>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-12 bg-secondary p-2 mb-3" style="border-radius: 10px;">
                      <p>Berdasarkan data diatas dan dokumen sebagai bukti pelaporan pihak pengurus RT.003 RW.003 Kelurahan Sawah Baru menyatakan bahwa pelapor:</p>
                    </div>
                    <div class="col-md-12">
                      <a href="{{ url('admin/penduduk-masuk/terima/'.$sementara->id_penduduk) }}" class="btn btn-success">Terima & Cetak</a>
                      <a href="{{ url('admin/penduduk-masuk/tolak/'.$sementara->id_penduduk) }}" class="btn btn-danger">Tolak</a>
                    </div>
                  </div>
                @else 
                  <h4 class="mt-3">Data Penduduk Salah</h4>
                @endif
              @endif
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
                        <span class="badge badge-warning">Meninggal</span>
                      @endif
                      @if($c->status == '4')
                        <span class="badge badge-secondary">Keluar</span>
                      @endif
                      @if($c->status == '5')
                        <span class="badge badge-secondary">Ditolak</span>
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