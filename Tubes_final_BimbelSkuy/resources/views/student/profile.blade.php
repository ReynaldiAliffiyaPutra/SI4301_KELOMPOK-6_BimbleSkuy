@extends('layout.main')

@section('title', 'Program')

@section('body')
  <div class="container-fluid">
    <div class="d-flex flex-column align-items-center">
      <div style="width: 180px; height: 180px; overflow: hidden;">
        <img src="/upload/profilepict/user-default.png" alt="" width="100%">
      </div>

      <div class="mb-3 mt-4" style="width: 450px">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" value="{{ $user->username }}" readonly>
      </div>
      <div class="mb-3" style="width: 450px">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
      </div>
      <div class="mb-3" style="width: 450px">
        <label for="sekolah" class="form-label">Sekolah/Perguruan Tinggi</label>
        <input type="text" class="form-control" id="sekolah" value="{{ $user->sekolah }}" readonly>
      </div>
      <div class="mb-5" style="width: 450px">
        <label for="nohp" class="form-label">No. HP</label>
        <input type="text" class="form-control" id="nohp" value="{{ $user->hp }}" readonly>
      </div>

      <a href="/logout" class="btn btn-danger" style="width: 450px; border-radius: 0">Logout</a>
    </div>
  </div>
@endsection
