@extends('layout.main')

@section('title', 'Kategori Materi Pelajaran')

@section('body')
  <div class="container-fluid">
    @if (session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @elseif (session('error'))
      <div class="alert alert-danger mb-3">{{ session('error') }}</div>
    @endif
    
    <div class="d-flex align-items-center gap-3">
      <img src="/resource/img/task.png" alt="" height="30px">
      <h5 class="mb-0">Kategori Materi Pelajaran</h5>
    </div>

    <div class="row row-cols-1 row-cols-lg-3 mt-4">
      @foreach ($pembelajaran as $p)
        <div class="col mb-3">
          <div class="card h-100" style="background-color: #C4C4C4; border: none; border-radius: 0">
            <div
              style="margin: 1rem 1rem 0 1rem; height: 230px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
              <img src="/upload/pembelajaran/{{ $p->cover }}" class="card-img-top" alt="masih newbie" width="100%">
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-text">{{ $p->title }}</h5>
              <a href="/student/materi/{{ $p->id_pembelajaran }}" class="btn btn-primary w-100 mt-2"
                style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Pelajari Sekarang</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
