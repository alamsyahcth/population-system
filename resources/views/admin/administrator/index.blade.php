@extends('admin/layouts/app')
@section('title','Kelola Administrator')
@section('content')
<section>
  @include('admin/layouts/alert')
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-dark">
          <div class="d-flex justify-content-between align-self-center">
            <h6 class="mt-2"><i class="fas fa-plus mr-3"></i> Tambah data</h6>
          </div>
        </div>
        <div class="card-body m-0">
          <form class="form-horizontal" action="{{ url('admin/administrator/store') }}" method="post">
            @csrf
            <div class="form">
              <div class="form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name" placeholder="Nama Administrator"/>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" placeholder="Email Administrator"/>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" autocomplete="jabatan" placeholder="jabatan Administrator">
                  <option value="Ketua RT">Ketua RT</option>
                  <option value="Sekretaris">Sekretaris</option>
                  <option value="Bendahara">Bendahara</option>
                  <option value="Seksi-seksi">Seksi-seksi</option>
                </select>
                @error('jabatan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <select name="periode" class="form-control @error('periode') is-invalid @enderror" autocomplete="periode" placeholder="periode Administrator">
                  <option value="2020-2023">2020-2023</option>
                  <option value="2023-2026">2023-2026</option>
                  <option value="2026-2029">2026-2029</option>
                  <option value="2029-2032">2029-2032</option>
                </select>
                @error('periode')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="password" placeholder="Password Administrator"/>
                @error('password')
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
                <th width="35%">Nama</th>
                <th width="20%">Email</th>
                <th width="15%">Jabatan</th>
                <th width="15%">Periode</th>
                <th width="10%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->jabatan }}</td>
                <td>{{ $d->periode }}</td>
                <td>
                  <a href="{{ url('admin/administrator/destroy/'.$d->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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