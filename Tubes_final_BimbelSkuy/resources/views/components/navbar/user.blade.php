<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/home*') ? 'active' : '' }}" href="/student/home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/program*') ? 'active' : '' }}" href="/student/program">Program</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/layanan*') ? 'active' : '' }}" href="/student/layanan">Layanan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/berlangganan*') ? 'active' : '' }}"
      href="/student/berlangganan">Berlangganan</a>
  </li>
</ul>

<div>
  <a href="/student/profile">
    <img src="/upload/profilepict/user-default.png" alt="user" height="45" width="45" style="border-radius: 50%">
  </a>
</div>
