@extends('admin/layouts/app')
@section('title','Pelayanan Surat Pengantar')
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
                    <th width="20">No Surat Pengantar</th>
                    <th width="60">Nama</th>
                    <th width="10%">Lihat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  @foreach($wait as $w)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $w->no_sp }}</td>
                    <td>{{ $w->name }}</td>
                    <td>
                      <a href="{{ url('admin/pelayanan/'.$w->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
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
                  <div class="col-md-12 text-center">
                    <h5 class="mb-0">PEMERINTAH KOTA TANGERANG SELATAN</h5>
                    <h5 class="mb-0">KECAMATAN CIPUTAT</h5>
                    <h5 class="mb-0">KELURAHAN SAWAH BARU</h5>
                    <h5 class="mb-0">RUKUN TETANGGA 003 RUKUN WARGA 003</h5>
                    <hr>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-12 text-center">
                    <h6 class="mb-1" style="font-weight: 700">SURAT PENGANTAR</h6>
                    <H6 class="mb-0">No: ............................ </H6>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <p class="text-label">Nama Lengkap</p>
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
                    <p class="text-label">Jenis Kelamin</p>
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
                    <p class="text-label">NIK</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <p class="text-label">Keperluan</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                </div>
                
                <div class="row mt-2">
                  <div class="col-md-12">
                    <p class="text-label">Demikianlah Surat Pengantar ini dibuat untuk mendapat perhatian dan dapat dipergunakan sebagaimana mestinya</p>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-md-6 text-center"></div>
                  <div class="col-md-6 text-center">
                    <p>Sawah Baru, {{ date("d/m/Y") }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 text-center">
                    <p>Ketua RW.003</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <p>Ketua RT.003</p>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-6 text-center">
                    <p>(TIDIN)</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <p>(SANDI)</p>
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
              @elseif($status == 2)
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h5 class="mb-0">PEMERINTAH KOTA TANGERANG SELATAN</h5>
                    <h5 class="mb-0">KECAMATAN CIPUTAT</h5>
                    <h5 class="mb-0">KELURAHAN SAWAH BARU</h5>
                    <h5 class="mb-0">RUKUN TETANGGA 003 RUKUN WARGA 003</h5>
                    <hr>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-12 text-center">
                    <h6 class="mb-1" style="font-weight: 700">SURAT PENGANTAR</h6>
                    <H6 class="mb-0">No: {{ $data->no_sp }} </H6>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <p class="text-label">Nama Lengkap</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                  <div class="col-md-8">
                    <p>{{ $data->name }}</p>
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
                    <p>{{ $data->tempat_lahir }}</p>
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
                    <p>{{ $data->tanggal_lahir }}</p>
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
                    @if($data->jenis_kelamin == 'L')
                      <p>Laki-laki</p>
                    @else 
                      <p>Perempuan</p>
                    @endif
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
                    <p>{{ $data->pekerjaan }}</p>
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
                    <p>{{ $data->alamat }}</p>
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
                    <p>{{ $data->nik }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <p class="text-label">Keperluan</p>
                  </div>
                  <div class="col-md-1">
                    <p>:</p>
                  </div>
                  <div class="col-md-8">
                    @foreach($keperluan as $k)
                      <div class="row mb-1">
                        <div class="col-md-12 bg-secondary p-1 rounded">
                          <p style="font-weight: 700">{{ $k->nama_keperluan }}</p>
                          <p>{{ $k->detail_pelayanan_keterangan }}</p>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                
                <div class="row mt-2">
                  <div class="col-md-12">
                    <p class="text-label">Demikianlah Surat Pengantar ini dibuat untuk mendapat perhatian dan dapat dipergunakan sebagaimana mestinya</p>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-md-6 text-center"></div>
                  <div class="col-md-6 text-center">
                    <p>Sawah Baru, {{ date("d/m/Y") }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 text-center">
                    <p>Ketua RW.003</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <p>Ketua RT.003</p>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-6 text-center">
                    <p>(TIDIN)</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <p>(SANDI)</p>
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
              {{-- <table id="example2" class="table">
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
                      @if($status == 1)
                        <a href="{{ url('admin/penduduk-tetap/edit/'.$c->id_penduduk) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></i></a>
                      @endif
                      @if($status == 2)
                        <a href="{{ url('admin/penduduk-sementara/edit/'.$c->id_penduduk) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></i></a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection