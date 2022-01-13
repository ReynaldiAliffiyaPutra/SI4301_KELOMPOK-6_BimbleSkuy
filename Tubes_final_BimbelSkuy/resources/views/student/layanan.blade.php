@extends('layout.main')

@section('title', 'Layanan')

@section('body')
  <div class="container-fluid">
    @if (session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @elseif (session('error'))
      <div class="alert alert-danger mb-3">{{ session('error') }}</div>
    @endif

    <div style="padding: 2rem; background-color: white">
      <h4 class="mb-4">Feedback</h4>
      <form action="/student/layanan/store" method="POST">
        @csrf
        <textarea class="form-control mb-3" id="feedback" name="feedback" rows="5" maxlength="255"></textarea>
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary px-5" style="border: none; border-radius: 0;">Kirim</button>
        </div>
      </form>
    </div>
  </div>
@endsection
