@extends('layout.landing')

@section('title', 'Welcome!')

@section('body')
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
    style="width: 100%; height: 95vh; overflow: hidden;">
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

  <div class="container" style="margin-top: -15vh">
    <div style="padding: 2rem; background-color: var(--nav-color); border-radius: 30px; position: relative; z-index: 5;">
      <div class="row row-cols-3">
        <div class="col">
          <a href="#">
            <img src="/resource/img/masih-newbie.png" alt="" width="100%">
          </a>
        </div>
        <div class="col">
          <a href="#">
            <img src="/resource/img/masih-newbie.png" alt="" width="100%">
          </a>
        </div>
        <div class="col">
          <a href="#">
            <img src="/resource/img/masih-newbie.png" alt="" width="100%">
          </a>
        </div>
      </div>
    </div>
  </div>

  <br><br>
@endsection
