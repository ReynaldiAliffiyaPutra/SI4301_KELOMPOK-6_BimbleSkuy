<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | Admin - BimbelSkuy</title>

  <x-cdn.head />
</head>

<body>
  <x-navbar />

  <div class="body-content">
    @yield('body')
  </div>

  <footer style="background-color: transparent; padding: 0">
    <p style="text-align: center; color: black">&copy; 2022 BimbleSkuy All Rights Reserved PT. BimbleSkuy Indonesia </p>
  </footer>
  <x-cdn.body />

  @yield('script')
</body>

</html>
