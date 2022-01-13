@extends('layout.adminmain')

@section('title', 'User Detail')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    <h3 class="mb-3">Detail User</h3>
    <div style="padding: 2rem; background-color: white">
      <h4>Biodata</h4>
      <hr>
      <table>
        <tr>
          <td style="width: 180px">Nama</td>
          <td>: {{ $user->full_name }}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>: {{ $user->email }}</td>
        </tr>
        <tr>
          <td>User created</td>
          <td>: {{ $user->created_at }}</td>
        </tr>
        <tr>
          <td>Pengambilan Kelas</td>
          <td>: {{ $paket }}</td>
        </tr>
      </table>
      <h4 class="mt-5">Pembayaran</h4>
      <hr>
      @if ($bayar == null)
        <h5>Belum ada pembayaran</h5>
      @else
        <table>
          <tr>
            <td style="width: 180px">Tanggal</td>
            <td>: {{ $bayar->created_at }}</td>
          </tr>
          <tr>
            <td>Jumlah</td>
            <td>: Rp{{ number_format($bayar->nominal, 0, ',', '.') }},00</td>
          </tr>
        </table>
        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#PaymentModal">Lihat Detail
          Pembayaran</button>
      @endif
    </div>
  </div>

  <!-- Modal -->
  @if ($bayar != null)
    <div class="modal fade" id="PaymentModal" tabindex="-1" aria-labelledby="PaymentModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="PaymentModalLabel">Detail Pembayaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex justify-content-center">
              <img src="/resource/img/{{str_replace(' ', '_', strtolower($bayar->metode_pembayaran))}}.png" alt="" height="100px">
            </div>
            <table>
              <tr>
                <td>Metode Pembayaran</td>
                <td>: {{ $bayar->metode_pembayaran}}</td>
              </tr>
              <tr>
                <td>Kode Bayar</td>
                <td>: {{ $bayar->kode_pembayaran }}</td>
              </tr>
              <tr>
                <td>Tanggal ePembayaran</td>
                <td>: {{ $bayar->created_at }}</td>
              </tr>
              <tr>
                <td>Nominal</td>
                <td>: Rp{{ number_format($bayar->nominal, 0, ',', '.') }},00</td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection
