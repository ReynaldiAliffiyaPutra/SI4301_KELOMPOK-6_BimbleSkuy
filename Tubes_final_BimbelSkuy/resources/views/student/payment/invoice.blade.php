@extends('layout.main')

@section('title', 'Pembayaran')

@section('body')
  <div class="container-fluid">
    <div class="d-flex justify-content-center" style="transform: translateY(-2rem)">
      <div class="d-flex" style="width: 80%; background-color: #C4C4C4; padding: 1rem;">
        <a href="/student/berlangganan" style="text-decoration: none; color: black;">
          <h3 class="mb-0"><i class="fa fa-arrow-left" aria-hidden="true"></i></h3>
        </a>
        <h3 class="mb-0" style="text-align: center; width: 100%">Draft Invoice</h3>
      </div>
    </div>

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
        <div>
          <h5 class="mb-3">Detail Pemesanan</h5>
          <h6 class="mb-2">Nama Produk</h6>
          <p class="mb-0">Masih Newbie</p>
          <p>Berlaku 6 bulan</p>

          <h6 class="mb-2">Deskripsi</h6>
          <p class="mb-0">Paket Sudah Termasuk</p>
          <ul>
            <li>10 rb menit video pembelajaran</li>
            <li>Pengajar yang bersertifikat</li>
            <li>Belum Termasuk Sertifikasi</li>
          </ul>
        </div>

        <hr>

        <div>
          <h5>Detail Pembayaran</h5>
          <table style="width: 100%; font-weight: 500">
            <tr style="height: 40px">
              <td style="width: 100%">Paket Masih Newbie</td>
              <td style="width: max-content">Rp{{ number_format($v, 0, ',', '.') }},00</td>
            </tr>
          </table>
        </div>

        <div class="d-flex justify-content-end">
          <form action="/student/berlangganan/metodepembayaran" method="POST">
            @csrf
            <input type="hidden" name="pay" value="{{ $v }}">
            <button class="btn btn-primary" style="background-color: #FC640F; border-radius: 0; padding: .3rem 2rem">Pilih
              Metode Pembayaran</button>
          </form>
        </div>
      </div>

    </div>

  </div>
@endsection
