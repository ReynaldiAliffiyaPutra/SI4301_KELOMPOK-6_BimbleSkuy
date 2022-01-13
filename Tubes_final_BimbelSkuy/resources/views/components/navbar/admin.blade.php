<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/dashboard*') ? 'active' : '' }}" href="/admin/dashboard">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/user*') ? 'active' : '' }}" href="/admin/user">User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/pembelajaran*') ? 'active' : '' }}" href="/admin/pembelajaran">Pembelajaran</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/pengajar*') ? 'active' : '' }}" href="/admin/pengajar">Pengajar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('*/feedback*') ? 'active' : '' }}" href="/admin/feedback">Feedback</a>
  </li>
</ul>

<div class="d-flex gap-3 align-items-center">
  <h6 class="mb-0">admin</h6>
  <a href="/logout"><button class="btn btn-primary">Logout</button></a>
</div>
