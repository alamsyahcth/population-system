@extends('admin/layouts/app')
@section('title','Pengumuman')
@section('content')
<section>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body m-0">
          <form class="form-horizontal" action="{{ url('admin/pengumuman/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
              <div class="form-group">
                <label for="title" class="control-label mb-0">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" autocomplete="title" placeholder="title"/>
                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="author" class="control-label mb-0">Author</label>
                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value={{ Auth::user()->name }} autocomplete="author" placeholder="author"/>
                @error('author')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="image" class="control-label mb-0">Foto Pengumuman</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" autocomplete="image" placeholder="image"/>
                @error('image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="content" class="control-label mb-0">Foto Pengumuman</label>
                 <textarea class="textarea @error('content') is-invalid @enderror" placeholder="Tuliskan Pengumuman" name="content" style="width: 100%; height: 400px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                @error('content')
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
  </div>
</section>
@endsection