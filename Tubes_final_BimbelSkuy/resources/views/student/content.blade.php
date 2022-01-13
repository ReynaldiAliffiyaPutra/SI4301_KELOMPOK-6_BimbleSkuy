@extends('layout.main')

@section('title', 'Informasi Guru')

@section('body')
  <div class="container mt-4" style="max-width: 1100px">
    <div class="d-flex flex-column">
      <h3 class="mb-4">{{ $pembelajaran->title }}</h3>
      <div class="d-flex justify-content-center">
        <img src="/upload/pembelajaran/{{ $pembelajaran->cover }}" alt="" height="400px"
          style="width: max-content; max-width: 100%;">
      </div>
      <textarea class="mt-4 mb-4" name="content" id="content" disabled>{{ $pembelajaran->materi }}</textarea>
    </div>
  </div>
@endsection

@section('style')
  <style>
    textarea:disabled {
      border: none;
      background-color: var(--bg-color);
    }

  </style>
@endsection

@section('script')
  <script>
    $('textarea').each(function() {
      this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    });
  </script>
@endsection
