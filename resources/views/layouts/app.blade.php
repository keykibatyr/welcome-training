<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WelcomeTraining</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</head>

<body class="min-h-screen flex flex-col pt-16">

  @include('partials.navbar')

  <main class="flex-1">
    @yield('content')
  </main>

  @include('partials.footer')

</body>
</html>