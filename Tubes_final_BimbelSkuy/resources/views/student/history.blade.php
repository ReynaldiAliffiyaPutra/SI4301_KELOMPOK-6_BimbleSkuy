@extends('layout.main')

@section('title', 'History')

@section('body')
  <div class="container-fluid">
    <div class="d-flex align-items-center gap-3">
      <img src="/resource/img/task.png" alt="" height="30px">
      <h5 class="mb-0">History</h5>
    </div>
  </div>

  <div class="container mt-4" style="max-width: 1100px">
    <div class="d-flex flex-column">
      @foreach ($pembelajaran as $p)
        <div class="card mb-3" style="background-color: #C4C4C4; border-radius: 0; border: none;">
          <div class="row g-0">
            <div class="col-auto p-3">
              <div
                style="width: 300px; height: 168px; max-width: 100%; overflow: hidden; display: flex; align-content: center;">
                <img src="/upload/pembelajaran/{{ $p->cover }}" class="rounded-start" alt="" width="100%"
                  style="object-fit: cover;">
              </div>
            </div>
            <div class="col">
              <div class="card-body h-100 d-flex flex-column justify-content-between" style="font-weight: 500">
                <div>
                  <h5>{{ $p->title }}</h5>
                  <h6>Kategori Materi : {{ $p->kategori }}</h6>
                  <h6>
                    @if ($p->paket == '1')
                      <h6>Paket : Masih Newbie</h6>
                    @elseif ($p->paket == '2')
                      <h6>Paket : Sudah Advance</h6>
                    @else
                      <h6>Paket : Jadi Developer</h6>
                    @endif
                  </h6>
                </div>
                <div class="d-flex w-100 justify-content-end gap-1">
                  <a href="/student/materi/{{ $p->id_pembelajaran }}" class="btn btn-primary"
                    style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Pelajari Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach


    </div>
  </div>
@endsection
