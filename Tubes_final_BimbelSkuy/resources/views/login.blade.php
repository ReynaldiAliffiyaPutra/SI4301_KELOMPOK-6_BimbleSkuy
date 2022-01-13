@extends('layout.auth')

@section('title', 'Login')

@section('form')
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @elseif (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  <form action="/login/auth" method="POST">
    @csrf
    <div class="form-floating mb-3">
      <input type="username" class="form-control" id="username" name="username" placeholder="name@example.com" required>
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <a href="/daftar" style="text-decoration: none">
      <h5 class="mt-4 mb-4">Belum Memiliki Akun</h5>
    </a>

    <button class="btn btn-primary btn-lg w-100" style="font-weight: 600">Login</button>
  </form>
@endsection
