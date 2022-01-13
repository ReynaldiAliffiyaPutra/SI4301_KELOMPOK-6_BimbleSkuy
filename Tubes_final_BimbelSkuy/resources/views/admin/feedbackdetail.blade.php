@extends('layout.adminmain')

@section('title', 'User Detail')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    <h3 class="mb-3">Detail Feedback</h3>
    <div style="padding: 2rem; background-color: white">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" value="{{ $feedback->name }}" disabled>
      </div>

      <div class="mb-3">
        <label for="text" class="form-label">Feedback</label>
        <textarea class="form-control" name="materi" id="text" rows="5" disabled>{{ $feedback->feedback }}</textarea>
      </div>
    </div>
  </div>
@endsection
