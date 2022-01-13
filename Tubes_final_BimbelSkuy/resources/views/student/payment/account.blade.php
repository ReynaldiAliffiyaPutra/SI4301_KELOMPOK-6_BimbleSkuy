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
        <div class="stepper-item active">
          <div class="step-counter"><i class="fa fa-check d-none" aria-hidden="true"></i></div>
          <div class="step-name">Selesai</div>
        </div>
      </div>
    </div>

    <div class="d-flex align-items-center flex-column">
      <div class="mt-4" style="background-color: white; width: 1000px; max-width: 100%; padding: 2rem">

        <h5>No Pembayaran {{ $payment }}</h5>

        <img src="/resource/img/{{ $bankimg }}" alt="" height="70">

        <br>

        <div class="input-group">
          <div class="form-floating" style="flex-grow: 1">
            <input type="email" class="form-control" id="floatingInput" value="{{ $kodebayar }}"
              style="background-color: #E7E7E7 !important; border: none">
            <label for="floatingInput">No Rekening</label>
          </div>
          <button style="width: 58px; height: 58px; border: none; background-color: #E7E7E7"><i class="fa fa-clone"
              aria-hidden="true"></i></button>
        </div>
      </div>

      <div class="mt-4" style="background-color: white; width: 1000px; max-width: 100%; padding: 2rem">

        <h5>Total Pembayaran</h5>

        <br>

        <h4 style="padding: 1rem; background-color: #E7E7E7; text-align: center">
          Rp{{ number_format($pay, 0, ',', '.') }},00</h4>
      </div>

      <div class="mt-4" style="width: 1000px; max-width: 100%;">
        <div class="d-flex justify-content-end w-100">
          <form action="/student/berlangganan/createtrans" method="POST">
            @csrf
            <input type="hidden" name="pay" value="{{ $pay }}">
            <input type="hidden" name="payment" value="{{ $payment }}">
            <input type="hidden" name="kodebayar" value="{{ $kodebayar }}">
            <button class="btn btn-primary" style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Bayar
              Sekarang</button>
          </form>
        </div>
      </div>
    </div>

  </div>
@endsection
