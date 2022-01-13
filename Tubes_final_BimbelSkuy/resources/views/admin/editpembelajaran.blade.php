@extends('layout.adminmain')

@section('title', 'Pemebelajaran')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    <h3 class="mb-3">Detail Pembelajaran</h3>
    <div style="padding: 2rem; background-color: white">
      <form action="/admin/pembelajaran/update/{{ $materi->id_pembelajaran }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" style="background-color: #C4C4C4; padding: 2rem; width: max-content;">
          <div class="mb-3"
            style="width: 300px; height: 168px; max-width: 100%; overflow: hidden; display: flex; align-content: center;">
            <img src="/upload/pembelajaran/{{ $materi->cover }}" alt="" width="100%" style="object-fit: cover;" id="output">
          </div>
          <input type="file" id="cover" accept="image/png, image/jpeg" onchange="loadFile(event)" name="covermateri">
        </div>

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="judulmateri" id="title" placeholder="Judul materi" value="{{ $materi->title }}" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Kategori Materi</label>
          <select class="form-select" name="kategori" aria-label="Default select example" required>
            <option selected disabled>-- Pilih Kategori --</option>
            <option value="java" {{ $materi->kategori == "java" ? "selected" : "" }}>Java</option>
            <option value="c++" {{ $materi->kategori == "c++" ? "selected" : "" }}>C++</option>
            <option value="python" {{ $materi->kategori == "python" ? "selected" : "" }}>Python</option>
            <option value="javascript" {{ $materi->kategori == "javascript" ? "selected" : "" }}>JavaScript</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Paket</label>
          <select class="form-select" name="paket" aria-label="Default select example" required>
            <option selected disabled>-- Pilih Paket --</option>
            <option value="1" {{ $materi->paket == "1" ? "selected" : "" }}>Masih Newbie</option>
            <option value="2" {{ $materi->paket == "2" ? "selected" : "" }}>Sudah Advance</option>
            <option value="3" {{ $materi->paket == "3" ? "selected" : "" }}>Jadi Developer</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="text" class="form-label">Example textarea</label>
          <textarea class="form-control" name="materi" id="text" rows="20" required>{{ $materi->materi }}</textarea>
        </div>

        <div class="d-flex w-100 justify-content-end gap-2">
          <a href="/admin/pembelajaran" class="btn btn-primary" style="border-radius: 0; padding: .3rem 2rem" onclick="return confirm('Discard all changes?')">Discard</a>
          <button class="btn btn-primary" style="border-radius: 0; padding: .3rem 2rem">Save</button>
        </div>
      </form>
    </div>

  </div>
@endsection

@section('script')
  <script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
@endsection
