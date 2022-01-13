@extends('layout.adminmain')

@section('title', 'Pemebelajaran')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    @if (session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @elseif (session('error'))
      <div class="alert alert-danger mb-3">{{ session('error') }}</div>
    @endif

    <h3 class="mb-3">Pengajar</h3>
    <div style="padding: 2rem; background-color: white">
      <div class="d-flex justify-content-end">
        <a href="/admin/pengajar/add" class="btn btn-primary border-0 mb-3">Tambah pengajar</a>
      </div>

      <div class="d-flex flex-column">
        @foreach ($pengajar as $p)
          <div class="card mb-3" style="background-color: #C4C4C4; border-radius: 0; border: none;">
            <div class="row g-0">
              <div class="col-md-4 p-3">
                <div
                  style="width: 400px; height: 200px; max-width: 100%; overflow: hidden; display: flex; align-content: center;">
                  <img src="/upload/pengajar/{{ $p->profile }}" alt="" width="100%" style="object-fit: cover;">
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-body h-100 d-flex flex-column justify-content-center" style="font-weight: 500">
                  <p class="card-text">Nama : {{ $p->nama }}</p>
                  <p class="card-text">Umur : {{ $p->umur }}</p>
                  <p class="card-text">Tamatan : {{ $p->tamatan }}</p>
                  <p class="card-text">Basic : {{ $p->keahlian }}</p>
                  <div class="d-flex w-100 justify-content-end gap-1">
                    <a href="/admin/pengajar/edit/{{ $p->id_pengajar }}" class="btn btn-light"
                      style="border-radius: 0; padding: .3rem 2rem">Edit</a>
                    <a href="/admin/pengajar/delete/{{ $p->id_pengajar }}" class="btn btn-danger"
                      style="border-radius: 0; padding: .3rem 2rem"
                      onclick="return confirm('Ingin menghapus data?')">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>
@endsection
