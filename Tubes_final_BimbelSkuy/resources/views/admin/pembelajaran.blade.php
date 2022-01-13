@extends('layout.adminmain')

@section('title', 'Pemebelajaran')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    @if (session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @elseif (session('error'))
      <div class="alert alert-danger mb-3">{{ session('error') }}</div>
    @endif

    <h3 class="mb-3">Pembelajaran</h3>
    <div style="padding: 2rem; background-color: white">
      <div class="d-flex justify-content-end">
        <a href="/admin/pembelajaran/add" class="btn btn-primary border-0 mb-3">Tambah pembelajaran</a>
      </div>

      <div class="d-flex flex-column">
        @foreach ($pembelajaran as $p)
          <div class="card mb-3" style="background-color: #C4C4C4; border-radius: 0; border: none;">
            <div class="row g-0">
              <div class="col-auto p-3">
                <div
                  style="width: 300px; height: 168px; max-width: 100%; overflow: hidden; display: flex; align-content: center;">
                  <img src="/upload/pembelajaran/{{ $p->cover }}" alt="" width="100%" style="object-fit: cover;">
                </div>
              </div>
              <div class="col">
                <div class="card-body h-100 d-flex flex-column justify-content-between" style="font-weight: 500">
                  <div>
                    <h5 class="mb-3">{{ $p->title }}</h5>
                    <h6>
                      @if ($p->paket == '1')
                        <h6>Paket : Masih Newbie</h6>
                      @elseif ($p->paket == '1')
                        <h6>Paket : Sudah Advance</h6>
                      @else
                        <h6>Paket : Jadi Developer</h6>
                      @endif
                    </h6>
                  </div>
                  <div class="d-flex w-100 justify-content-end gap-1">
                    <a href="/admin/pembelajaran/edit/{{ $p->id_pembelajaran }}" class="btn btn-light"
                      style="border-radius: 0; padding: .3rem 2rem">Edit</a>
                    <a href="/admin/pembelajaran/delete/{{ $p->id_pembelajaran }}" class="btn btn-danger"
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
