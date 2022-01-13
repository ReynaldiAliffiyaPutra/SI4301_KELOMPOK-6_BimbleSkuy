@extends('layout.main')

@section('title', 'Riwayat Pembayaran')

@section('body')
  <div class="container-fluid">
    <div class="d-flex align-items-center gap-3">
      <img src="/resource/img/task.png" alt="" height="30px">
      <h5 class="mb-0">Riwayat Pembayaran</h5>
    </div>
  </div>

  <div class="container mt-4" style="max-width: 1100px">
    <div class="d-flex flex-column">
      {{-- loop here --}}
      @foreach ($pembayaran as $p)
        <div class="card mb-3" style="background-color: #C4C4C4; border-radius: 0; border: none;">
          <div class="row g-0">
            <div class="col-auto p-3">
              <div
                style="width: 100px; height: 100%; max-width: 100%; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                <img src="/resource/img/{{ str_replace(' ', '_', strtolower($p->metode_pembayaran)) }}.png" alt=""
                  width="60px">
              </div>
            </div>
            <div class="col">
              <div class="card-body h-100 d-flex flex-column justify-content-between" style="font-weight: 500">
                <div>
                  @if ($p->nominal == '500000')
                    <h5>Pembayaran Masih Newbie</h5>
                  @elseif ($p->nominal == '800000')
                    <h5>Pembayaran Sudah Advance</h5>
                  @else
                    <h5>Pembayaran Jadi Developer</h5>
                  @endif
                  <h6>No pembayaran : {{ $p->metode_pembayaran }}</h6>
                  <h6>Nominal : Rp{{ number_format($p->nominal, 0, ',', '.') }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
