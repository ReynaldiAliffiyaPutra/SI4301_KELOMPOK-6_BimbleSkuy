<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | BimbelSkuy</title>

  <x-cdn.head />

  <style>
    body {
      width: 100vw;
      min-height: 100vh;
      background-image: url('/resource/img/logo-bg.png');
      background-size: 120vh;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center
    }

  </style>
</head>

<body>
  <div class="form" style="width: 500px; background-color: var(--nav-color); padding: 2rem">
    @yield('form')
  </div>

  <x-cdn.body />
</body>

</html>
