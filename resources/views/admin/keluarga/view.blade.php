@extends('admin/layouts/app')
@section('title','Data Keluarga')
@section('content')
<section>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <a href="{{ url('admin/keluarga') }}" class="btn btn-secondary"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3>No. Kartu Keluarga <span style="font-weight: 700">{{ $selected->no_kk }} </span></h3>
              <h6>Nama Kepala Keluarga <span style="font-weight: 700">{{ $selected->nama_kepala_keluarga }} </span></h6>
            </div>
            <div class="col-md-12 mt-4 px-5">
              <p style="font-size: 12px;">Berdasarkan No. Kartu Keluarga Diatas keluarga ini merupakan <span style="font-weight: 700">Warga Tetap</span> dilingkungan RT.003 RW.03 Kelurahan Sawah Baru Kecamatan Ciputat Kota Tangerang Selatan, dan anggota keluarganya adalah sebagai berikut :</p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="35%">Nomor Induk Kependudukan</th>
                    <th width="50%">Nama</th>
                    <th width="10%">Edit Data</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  @foreach($anggota as $a)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $a->nik }}</td>
                    <td>{{ $a->name }}</td>
                    <td>
                      <a href="{{ url('admin/penduduk-tetap/edit/'.$a->id_penduduk) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
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