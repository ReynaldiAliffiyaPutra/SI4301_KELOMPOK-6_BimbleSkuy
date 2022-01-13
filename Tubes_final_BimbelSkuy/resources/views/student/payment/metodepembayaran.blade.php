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
        <div class="stepper-item active">
          <div class="step-counter"><i class="fa fa-check d-none" aria-hidden="true"></i></div>
          <div class="step-name">Metode Pembayaran</div>
        </div>
        <div class="stepper-item">
          <div class="step-counter"><i class="fa fa-check d-none" aria-hidden="true"></i></div>
          <div class="step-name">Selesai</div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center">
      <div class="mt-4" style="background-color: white; width: 1000px; max-width: 100%; padding: 2rem">
        <h5>Transfer Virtual Account</h5>
        <form action="/student/berlangganan/account" method="POST">
          @csrf
          <input type="hidden" name="pay" id="pay" value="{{ $pay }}">
          <div class="row mt-3">
            <div class="col">
              <input type="radio" name="metodepembayaran" id="bca" value="Bank BCA">
              <label for="bca" class="ms-2"><img src="/resource/img/bank_bca.png" alt="" height="70"></label>
            </div>
            <div class="col">
              <input type="radio" name="metodepembayaran" id="bri" value="Bank BRI">
              <label for="bri" class="ms-2"><img src="/resource/img/bank_bri.png" alt="" height="70"></label>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="radio" name="metodepembayaran" id="bni" value="Bank BNI">
              <label for="bni" class="ms-2"><img src="/resource/img/bank_bni.png" alt="" height="70"></label>
            </div>
            <div class="col">
              <input type="radio" name="metodepembayaran" id="mandiri" value="Bank Mandiri">
              <label for="mandiri" class="ms-2"><img src="/resource/img/bank_mandiri.png" alt="" height="70"></label>
            </div>
          </div>

          <h5 class="mt-4">Transfer E-Wallet</h5>
          <div class="row mt-3">
            <div class="col">
              <input type="radio" name="metodepembayaran" id="ovo" value="OVO">
              <label for="ovo" class="ms-2"><img src="/resource/img/ovo.png" alt="" height="70"></label>
            </div>
            <div class="col">
              <input type="radio" name="metodepembayaran" id="linkaja" value="Link Aja">
              <label for="linkaja" class="ms-2"><img src="/resource/img/linkaja.png" alt="" height="70"></label>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="radio" name="metodepembayaran" id="dana" value="DANA">
              <label for="dana" class="ms-2"><img src="/resource/img/dana.png" alt="" height="70"></label>
            </div>
          </div>

          <h5 class="mt-4">Transfer E-Wallet</h5>
          <div class="row mt-3">
            <div class="col">
              <input type="radio" name="metodepembayaran" id="indomaret" value="Indomaret">
              <label for="indomaret" class="ms-2"><img src="/resource/img/indomaret.png" alt=""
                  height="70"></label>
            </div>
            <div class="col">
              <input type="radio" name="metodepembayaran" id="alfamidi" value="Alfamidi">
              <label for="alfamidi" class="ms-2"><img src="/resource/img/alfamidi.png" alt=""
                  height="70"></label>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="radio" name="metodepembayaran" id="alfamart" value="Alfamart">
              <label for="alfamart" class="ms-2"><img src="/resource/img/alfamart.png" alt=""
                  height="70"></label>
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <button class="btn btn-primary"
              style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Lanjutkan Pembayaran</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
