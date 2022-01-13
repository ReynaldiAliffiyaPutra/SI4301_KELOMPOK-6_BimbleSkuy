<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | BimbelSkuy</title>

  @yield('style')

  <x-cdn.head />
</head>

<body>
  <x-navbar />

  <div class="body-content">
    <x-sidebar />

    <div class="content-wrap" id="content-wrap">
      @yield('body')
    </div>
  </div>

  <x-footer />
  <x-cdn.body />

  @yield('script')
</body>

</html>
