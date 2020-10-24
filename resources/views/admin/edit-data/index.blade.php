@extends('admin/layouts/app')
@section('title','Perubahan Data')
@section('content')
<section>
  @include('admin/layouts/alert')
  <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Data Terbaru</a>
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
                    <th width="80">Nama</th>
                    <th width="10%">Lihat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $d->name }}</td>
                    <td>
                      <a href="{{ url('admin/edit-data/'.$d->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
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
                    <p class="text-label">Pekerjaan</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                  <div class="col-md-8">
                    <p></p>
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

                <div class="row mt-4">
                  <div class="col-md-12 bg-secondary p-2 mb-3" style="border-radius: 10px;">
                    <p>Berdasarkan data diatas dan dokumen sebagai bukti pelaporan pihak pengurus RT.003 RW.003 Kelurahan Sawah Baru menyatakan bahwa pelapor:</p>
                  </div>
                  <div class="col-md-12">
                    <button href="#" class="btn btn-success" disabled>Terima</button>
                    <button href="#" class="btn btn-danger" disabled>Tolak</button>
                  </div>
                </div>
              @else

                <div class="row">
                  <div class="col-md-3">
                    <p class="text-label">NIK</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                  <div class="col-md-8">
                    <p>{{ $selected->nik }}</p>
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
                    <p>{{ $selected->name }}</p>
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
                    @if($selected->jenis_kelamin == 'L')
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
                    <p>{{ $selected->tempat_lahir }}</p>
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
                    <p>{{ $selected->tanggal_lahir }}</p>
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
                    <p>{{ $selected->agama }}</p>
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
                    <p>{{ $selected->pendidikan }}</p>
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
                    <p>{{ $selected->status_perkawinan }}</p>
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
                    <p>{{ $selected->status_dalam_keluarga }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <p class="text-label">Pekerjaan</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                  <div class="col-md-8">
                    <p>{{ $selected->pekerjaan }}</p>
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
                    <p>{{ $selected->kewarganegaraan }}</p>
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
                    <p>{{ $selected->nama_ayah }}</p>
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
                    <p>{{ $selected->nama_ibu }}</p>
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
                    <p>{{ $selected->alamat }}</p>
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

                <div class="row mt-4">
                  <div class="col-md-12 bg-secondary p-2 mb-3" style="border-radius: 10px;">
                    <p>Berdasarkan data diatas dan dokumen sebagai bukti pelaporan pihak pengurus RT.003 RW.003 Kelurahan Sawah Baru menyatakan bahwa pelapor:</p>
                  </div>
                  <div class="col-md-12">
                    <a href="{{ url('admin/edit-data/terima/'.$selected->id_penduduk) }}" class="btn btn-success">Terima</a>
                    <a href="{{ url('admin/edit-data/tolak/'.$selected->id_penduduk) }}" class="btn btn-danger">Tolak</a>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection