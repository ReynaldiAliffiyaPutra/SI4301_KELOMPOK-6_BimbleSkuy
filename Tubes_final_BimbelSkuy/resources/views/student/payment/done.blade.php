@extends('layout.main')

@section('title', 'Pembayaran')

@section('body')
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <div class="stepper-wrapper mb-4" style="width: 500px">
        <div class="stepper-item completed">
          <div class="step-counter"><i class="fa fa-check" aria-hidden="true"></i></div>
          <div class="step-name">Pilih Langganan</div>
        </div>
        <div class="stepper-item completed">
          <div class="step-counter"><i class="fa fa-check" aria-hidden="true"></i></div>
          <div class="step-name">Metode Pembayaran</div>
        </div>
        <div class="stepper-item completed">
          <div class="step-counter"><i class="fa fa-check" aria-hidden="true"></i></div>
          <div class="step-name">Selesai</div>
        </div>
      </div>
    </div>

    <div class="d-flex align-items-center flex-column">
      <img src="/resource/img/checked.png" alt="" height="100px" class="mt-5 mb-4">
      <h3 class="mb-5">Pembayaran Berhasil</h3>

      <div class="d-flex justify-content-end w-100">
        <a href="/student/home" class="btn btn-primary"
          style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Selesai</a>
      </div>
    </div>

  </div>
@endsection
