<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WelcomeTraining</title>
  @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">

  @include('partials.navbar')

  <main class="flex-1">
    @yield('content')
  </main>

  @include('partials.footer')

</body>
</html>