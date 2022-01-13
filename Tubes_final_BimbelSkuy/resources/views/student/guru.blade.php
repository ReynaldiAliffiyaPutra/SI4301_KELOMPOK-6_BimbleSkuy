@extends('layout.main')

@section('title', 'Informasi Guru')

@section('body')
  <div class="container-fluid">
    <div class="d-flex align-items-center gap-3">
      <img src="/resource/img/task.png" alt="" height="30px">
      <h5 class="mb-0">Daftar Guru</h5>
    </div>
  </div>

  <div class="container mt-4" style="max-width: 1100px">
    <div class="d-flex flex-column">
      @foreach ($pengajar as $p)
        <div class="card mb-3" style="background-color: #C4C4C4; border-radius: 0; border: none;">
          <div class="row g-0">
            <div class="col-md-4 p-3">
              <img src="/upload/pengajar/{{ $p->profile }}" class="img-fluid rounded-start" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body h-100 d-flex flex-column justify-content-center" style="font-weight: 500">
                <p class="card-text">Nama : {{ $p->nama }}</p>
                <p class="card-text">Umur : {{ $p->umur }}</p>
                <p class="card-text">Tamatan : {{ $p->tamatan }}</p>
                <p class="card-text">Basic : {{ $p->keahlian }}</p>
                <div class="d-flex w-100 justify-content-end gap-1">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
