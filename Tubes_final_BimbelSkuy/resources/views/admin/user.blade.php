@extends('layout.adminmain')

@section('title', 'User')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    <h3 class="mb-3">User</h3>
    <div style="padding: 2rem; background-color: white">
      <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Create</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $u)
            <tr>
              <th>{{ $u->full_name }}</th>
              <td>{{ $u->email }}</td>
              <td>{{ $u->created_at }}</td>
              <td>
                @if ($u->id_payment == null)
                <span class="badge rounded-pill bg-secondary">PENDING</span>
                @else
                <span class="badge rounded-pill bg-success">BERHASIL</span>
                @endif
              </td>
              <td><a href="/admin/detail-user/{{ $u->id_user }}" class="btn btn-sm btn-primary">Detail</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
@endsection
