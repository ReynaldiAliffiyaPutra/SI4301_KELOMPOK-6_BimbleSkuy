@extends('layout.adminmain')

@section('title', 'Pemebelajaran')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    <h3 class="mb-3">Detail Pengajar</h3>
    <div style="padding: 2rem; background-color: white">
      <form action="/admin/pengajar/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" style="background-color: #C4C4C4; padding: 2rem; width: max-content;">
          <div class="mb-3"
            style="width: 300px; height: 168px; max-width: 100%; overflow: hidden; display: flex; align-content: center;">
            <img src="" alt="" width="100%" style="object-fit: cover;" id="output">
          </div>
          <input type="file" id="cover" accept="image/png, image/jpeg" onchange="loadFile(event)" name="profile" required>
        </div>

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Contoh: Acep" required>
        </div>

        <div class="mb-3">
          <label for="pendidikan" class="form-label">Pendidikan</label>
          <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Contoh: Universiatas X" required>
        </div>

        <div class="mb-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="number" class="form-control" name="umur" id="umur" required>
        </div>

        <div class="mb-3">
          <label for="keahlian" class="form-label">Keahlian</label>
          <input type="text" class="form-control" name="keahlian" id="keahlian" placeholder="Contoh: Java" required>
        </div>

        <div class="d-flex w-100 justify-content-end gap-2">
          <a href="/admin/pengajar" class="btn btn-primary" style="border-radius: 0; padding: .3rem 2rem" onclick="return confirm('Discard all changes?')">Discard</a>
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
