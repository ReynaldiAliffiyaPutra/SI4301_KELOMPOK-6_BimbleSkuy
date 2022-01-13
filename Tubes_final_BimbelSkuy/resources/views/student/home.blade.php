@extends('layout.main')

@section('title', 'Home')

@section('body')
  <div class="container-fluid d-flex justify-content-center">
    <div class="wrap bg-gray d-flex flex-column align-items-center" style="width: 500px">
      <img src="/upload/profilepict/user-default.png" alt="" class="mb-2" width="100">
      <h6 class="mt-3">{{ $user->full_name }}</h6>
      <h6>Mahasiswa</h6>
      <h6><a href="/student/profile" class="btn btn-light px-4" style="border: none; border-radius: 0">Profile</a></h6>
    </div>
  </div>

  <div class="container-fluid mt-4 d-flex justify-content-center">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 900px; max-width: 100%;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/resource/img/iklan.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/resource/img/iklan1.png" class="d-block w-100" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container-fluid mt-4 mb-4">
    <div class="wrap bg-gray">
      <div class="d-flex justify-content-center">
        <h5 style="background-color: var(--pr-color); padding: .5rem 5rem; width: max-content">Timeline</h5>
      </div>
      <div class="d-flex flex-column">
        {{-- loop date here --}}
        <h6 class="mt-3">Senin,10 Januari 2022</h6>

        {{-- loop task here --}}
        <div class="d-flex mb-2 p-2 gap-4 align-items-center" style="background-color: var(--pr-color);">
          <img src="/resource/img/icon-task.png" alt="">
          <div style="flex-grow: 1">
            <p class="mb-0">Belajar Java [Dasar] - Variable, Assignment, dan Deklarasi</p>
            <p class="mb-0" style="color: ">Java</p>
          </div>
          <p class="mb-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 11.59</p>
        </div>

        {{-- preview multi task (delete on code loop) --}}
        <div class="d-flex mb-2 p-2 gap-4 align-items-center" style="background-color: var(--pr-color);">
          <img src="/resource/img/icon-task.png" alt="">
          <div style="flex-grow: 1">
            <p class="mb-0">Belajar Python [Dasar] - Mengambil Input Data Dari User</p>
            <p class="mb-0" style="color: ">Python</p>
          </div>
          <p class="mb-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 11.59</p>
        </div>

        <h6 class="mt-3">Senin,11 Januari 2022</h6>

        <div class="d-flex mb-2 p-2 gap-4 align-items-center" style="background-color: var(--pr-color);">
          <img src="/resource/img/icon-task.png" alt="">
          <div style="flex-grow: 1">
            <p class="mb-0">Belajar Python [Dasar] - Operasi Logika atau Boolean</p>
            <p class="mb-0" style="color: ">Python</p>
          </div>
          <p class="mb-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 11.59</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-4 mb-4">
    <div class="wrap bg-gray">
      <div class="d-flex justify-content-center mb-3">
        <h5 style="background-color: var(--pr-color); padding: .5rem 5rem; width: max-content">Top Ranking</h5>
      </div>
      <div class="d-flex gap-5 justify-content-center">
        <div class="d-flex justify-content-center" style="width: 200px">
          <div class="d-flex flex-column align-items-center" style="margin-top: 100px">
            <img src="/upload/profilepict/user-default.png" alt="" width="100" class="mb-3">
            <h6 style="text-align: center">Juara 2</h6>
            <h6 style="text-align: center">Dina Ayu Wulandari</h6>
          </div>
        </div>
        <div class="d-flex justify-content-center" style="width: 200px">
          <div class="d-flex flex-column align-items-center">
            <img src="/upload/profilepict/user-default.png" alt="" width="100" class="mb-3">
            <h6 style="text-align: center">Juara 1</h6>
            <h6 style="text-align: center">Muhammad Syaefudin</h6>
          </div>
        </div>
        <div class="d-flex justify-content-center" style="width: 200px">
          <div class="d-flex flex-column align-items-center" style="margin-top: 100px">
            <img src="/upload/profilepict/user-default.png" alt="" width="100" class="mb-3">
            <h6 style="text-align: center">Juara 3</h6>
            <h6 style="text-align: center">Rismatullah raudatul hikmah</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
