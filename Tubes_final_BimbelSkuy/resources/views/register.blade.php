@extends('layout.auth')

@section('title', 'Daftar')

@section('form')
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @elseif (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  <form action="/daftar/store" method="POST">
    @csrf
    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating mb-2">
      <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Email" required>
      <label for="floatingEmail">Email</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Password" required>
      <label for="floatingInput">Password</label>
    </div>

    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingInput" name="fullname" placeholder="Nama Lengkap" required>
      <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="sekolah"
        placeholder="Sekolah / Perguruan Tinggi" required>
      <label for="floatingInput">Sekolah / Perguruan Tinggi</label>
    </div>

    <div class="form-floating mb-4">
      <input type="text" class="form-control" id="floatingInput" name="nohp" placeholder="Np. Handphone" required>
      <label for="floatingInput">Np. Handphone</label>
    </div>

    <button class="btn btn-primary btn-lg w-100" style="font-weight: 600">Daftar</button>
  </form>
@endsection
