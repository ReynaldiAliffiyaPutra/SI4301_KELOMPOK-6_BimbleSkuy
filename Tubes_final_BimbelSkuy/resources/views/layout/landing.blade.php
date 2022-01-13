<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | BimbelSkuy</title>

  <x-cdn.head />
</head>

<body>
  <x-navbar />

  @yield('body')

  <x-footer />
  <x-cdn.body />
</body>

</html>
