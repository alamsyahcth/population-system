@extends('admin/layouts/app')
@section('title','Dashboard')
@section('content')
<section id="dashboard-card">
  <div class="row">
    <div class="col-lg-4 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>Jumlah Pelayanan</p>
        </div>
        <div class="icon">
          <i class="fas fa-file-alt"></i>
        </div>
        <a href="#" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>150</h3>

          <p>Data Penduduk Masuk</p>
        </div>
        <div class="icon">
          <i class="fas fa-sign-in-alt"></i>
        </div>
        <a href="#" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>150</h3>

          <p>Data Penduduk Keluar</p>
        </div>
        <div class="icon">
          <i class="fas fa-sign-out-alt"></i>
        </div>
        <a href="#" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>150</h3>

          <p>Data Kelahiran Penduduk</p>
        </div>
        <div class="icon">
          <i class="fas fa-baby"></i>
        </div>
        <a href="#" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>150</h3>

          <p>Data Kematian Penduduk</p>
        </div>
        <div class="icon">
          <i class="fas fa-book-dead"></i>
        </div>
        <a href="#" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>150</h3>

          <p>Data Aspirasi</p>
        </div>
        <div class="icon">
          <i class="fas fa-headset"></i>
        </div>
        <a href="#" class="small-box-footer">Tampil Data <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
  </div>
</section>
<section id="data-aspirasi">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body row">
          <div class="col-md-12 d-flex justify-content-between">
            <h4>Data Aspirasi Terbaru</h4>
            <a href="#" class="btn btn-secondary">
              Tampil Data <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table" width="100%">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="30%">Dari</th>
                <th width="60%">Isi Aspirasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ahmad Rialdy</td>
                <td>Got Mampet di Jalan Kenangan</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Gunawan Fahmi</td>
                <td>Jalan Sudirman Rusak</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Linda Sukma</td>
                <td>Adakan acara ramah tamah</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Luna Agustina</td>
                <td>Sering berisik sampai malam di Jalan Kenangan I</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Dika Setiawan</td>
                <td>Tidak adanya pengamanan pada malam hari Gg.Persatuan</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection