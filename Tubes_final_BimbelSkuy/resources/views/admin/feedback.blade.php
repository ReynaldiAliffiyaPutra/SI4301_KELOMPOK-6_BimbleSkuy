@extends('layout.adminmain')

@section('title', 'Pemebelajaran')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    @if (session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @elseif (session('error'))
      <div class="alert alert-danger mb-3">{{ session('error') }}</div>
    @endif

    <h3 class="mb-3">Feedback</h3>
    <div style="padding: 2rem; background-color: white">
      <div class="d-flex flex-column">
        @foreach ($feedback as $f)
          <div class="d-flex gap-4 justify-content-between align-items-center p-3" style="background-color: #C4C4C4">
            <div style="flex-grow: 1; overflow: hidden;">
              <h6 class="mb-0">{{ $f->name }} : {{ $f->feedback }}</h6>
            </div>
            <a href="/admin/feedback/{{ $f->id_feedback }}" class="btn btn-sm btn-light">Detail</a>
          </div>
        @endforeach
      </div>
    </div>

  </div>
@endsection
