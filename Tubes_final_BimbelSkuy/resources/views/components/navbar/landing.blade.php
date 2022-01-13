<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('/kontak*') ? 'active' : '' }}" href="#footer">Kontak</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('/berlangganan*') ? 'active' : '' }}" href="/login">Berlangganan</a>
  </li>
</ul>

<div class="d-flex gap-3">
  <a href="/login" class="btn" style="background-color: #00D4C8C4; font-weight: 600;">Login</a>
  <a href="/daftar" class="btn" style="background-color: #00D4C8C4; font-weight: 600;">Register</a>
</div>
