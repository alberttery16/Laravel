<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Inicio · {{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <nav>
    <a href="{{ url('/dashboard') }}">Dashboard</a>
    <a href="{{ url('/profile') }}">Perfil</a>
    <a href="{{ url('/settings') }}">Ajustes</a>
    <a href="{{ url('/stats') }}">Estadísticas</a>
    <a href="{{ url('/messages') }}">Mensajes</a>
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('https://google.com') }}">Salir</a>
  </nav>
</header>
<main>
  ¡Bienvenido a tu página web!
</main>
</body>
</html>
</html>
