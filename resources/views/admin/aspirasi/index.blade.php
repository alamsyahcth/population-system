@extends('admin/layouts/app')
@section('title','Aspirasi')
@section('content')
<section>
  @include('admin/layouts/alert')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="timeline">
            @foreach($aspirasi as $a)
            <div>
              <i class="fas fa-envelope bg-blue"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">
                  <span class="text-primary" href="#">{{ $a->name }} </span> {{ $a->name_aspirasi }}
                  @if($a->status_aspirasi == 2)<div class="badge badge-success ml-3">Diterima</div>@endif
                  @if($a->status_aspirasi == 3)<div class="badge badge-danger ml-3">Ditolak</div>@endif
                </h3>

                <div class="timeline-body pt-2 py-0">
                  {{ $a->isi }}
                </div>
                <div class="timeline-footer">
                  @foreach ($get_balasan as $g)
                    @if($g->id_aspirasi == $a->id_aspirasi)
                      <div class="bg-secondary p-2 mb-4 rounded">
                        <p>Balasan Aspirasi</p>
                        <h6>
                          {{ $g->isi_balasan }}
                        </h6>
                      </div>
                    @endif
                  @endforeach

                  @if($a->status_aspirasi == 1)
                    <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample-{{ $a->id_aspirasi }}">Balas</a>
                    <a href="{{ url('admin/aspirasi/tolak/'.$a->id_aspirasi) }}" class="btn btn-danger btn-sm">Tolak</a>
                  @endif

                  <div id="accordionExample">
                    <div class="collapse mt-3 p-1" id="collapseExample-{{ $a->id_aspirasi }}" data-parent="#accordionExample">
                      <hr>
                      <form method="POST" action={{ url('admin/aspirasi/reply')}}>
                        @csrf
                        <div class="form-group">
                          <label for="balasan" class="control-label">Balasan Anda</label>
                          <input type="hidden" name="id_aspirasi" value="{{ $a->id_aspirasi }}" />
                          <textarea name="isi_balasan" class="form-control" placeholder="Tulis balasan anda disini"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">balas</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection