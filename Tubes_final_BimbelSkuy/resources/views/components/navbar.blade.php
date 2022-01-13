<div>
  <nav class="navbar navbar-expand-lg navbar-light {{ Request::is('/') ? 'bg-trans' : '' }} fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/resource/img/logo.png" alt="" height="45">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (isset($_SESSION['isLogin']))
          @if ($_SESSION['isLogin'] == true)
            @if ($_SESSION['status'] == 'usr')
              <x-navbar.user />
            @elseif ($_SESSION['status'] == 'adm')
              <x-navbar.admin />
            @endif
          @endif
        @else
          <x-navbar.landing />
        @endif
      </div>
    </div>
  </nav>
</div>
