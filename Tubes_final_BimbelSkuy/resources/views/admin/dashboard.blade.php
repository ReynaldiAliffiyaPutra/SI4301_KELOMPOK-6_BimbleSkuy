@extends('layout.adminmain')

@section('title', 'Dashboard')

@section('body')
  <div class="container mt-4 mb-4 pt-4">
    <div>
      <h5>User</h5>
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
        <div class="d-flex w-100 justify-content-end gap-1">
          <a href="/admin/user" class="btn btn-primary" style="border-radius: 0; padding: .3rem 2rem">See More</a>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <h5>Pembelajaran</h5>
      <div style="padding: 2rem; background-color: white">
        <div class="row row-cols-4  g-4">
          @foreach ($pembelajaran as $pb)
            <div class="col">
              <div class="card h-100">
                <img src="/upload/pembelajaran/{{ $pb->cover }}" class="card-img-top" alt="" height="160px">
                <div class="card-body">
                  <h6 class="card-title">{{ $pb->title }}</h6>
                  <a href="/admin/pembelajaran/edit/{{ $pb->id_pembelajaran }}"
                    class="btn btn-sm btn-primary w-100 border-0 mt-2" style="border-radius: 0;">Edit</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="d-flex w-100 justify-content-end gap-1">
          <a href="/admin/pembelajaran" class="btn btn-primary" style="border-radius: 0; padding: .3rem 2rem">See More</a>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <h5>Pengajar</h5>
      <div style="padding: 2rem; background-color: white">
        <div class="row row-cols-5  g-4">
          @foreach ($pengajar as $pb)
            <div class="col">
              <div class="card h-100">
                <img src="/upload/pengajar/{{ $pb->profile }}" class="card-img-top" alt="" height="130px">
                <div class="card-body">
                  <h6 class="card-title">{{ $pb->nama }}</h6>
                  <a href="/admin/pengajar/edit/{{ $pb->id_pengajar }}"
                    class="btn btn-sm btn-primary w-100 border-0 mt-2" style="border-radius: 0;">Edit</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="d-flex w-100 justify-content-end gap-1">
          <a href="/admin/pengajar" class="btn btn-primary" style="border-radius: 0; padding: .3rem 2rem">See More</a>
        </div>
      </div>
    </div>
  </div>
@endsection
