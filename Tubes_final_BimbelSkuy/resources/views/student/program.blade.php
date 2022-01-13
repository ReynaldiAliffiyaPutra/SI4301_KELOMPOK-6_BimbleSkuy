@extends('layout.main')

@section('title', 'Program')

@section('body')
  <div class="container-fluid">
    <div class="row row-cols-3">
      <div class="col">
        <div class="card h-100" style="background-color: #F9EDCE">
          <img src="/resource/img/card-masih-newbie.png" class="card-img-top" alt="masih newbie" style="padding: 1rem">
          <div class="card-body">
            <h5 class="card-title">Masih Newbie</h5>
            <p class="card-text">Masih newbie adalah program untuk belajar coding basic dengan menggunakan python</p>
            <div class="d-flex justify-content-end">
              <a href="/student/program/masih-newbie" class="btn btn-primary" style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: #F9EDCE">
          <img src="/resource/img/card-sudah-advance.png" class="card-img-top" alt="masih newbie" style="padding: 1rem">
          <div class="card-body">
            <h5 class="card-title">Sudah Advance</h5>
            <p class="card-text">Sudah Advance adalah program untuk belajar coding advance/berlanjut agar bisa membuat sebuah aplikasi</p>
            <div class="d-flex justify-content-end">
              <a href="/student/program/sudah-advance" class="btn btn-primary" style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: #F9EDCE">
          <img src="/resource/img/card-jadi-developer.png" class="card-img-top" alt="masih newbie" style="padding: 1rem">
          <div class="card-body">
            <h5 class="card-title">Jadi Developer</h5>
            <p class="card-text">Jadi Developer adalah program untuk belajar coding agar bisa menjadi sebuah programer yang sangat pro</p>
            <div class="d-flex justify-content-end">
              <a href="/student/program/jadi-developer" class="btn btn-primary" style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
