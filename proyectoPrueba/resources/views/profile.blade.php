<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"><title>Perfil · {{ config('app.name','Laravel') }}</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <nav>
    <a href="{{ url('/') }}">Inicio</a>
    <a href="{{ url('/profile') }}">Perfil</a>
    <a href="{{ url('/settings') }}">Ajustes</a>
    <a href="{{ url('/stats') }}">Estadísticas</a>
    <a href="{{ url('/messages') }}">Mensajes</a>
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('https://google.com') }}">Salir</a>
  </nav>
</header>
<main>
  <section class="card">
    <div class="avatar">A</div>
    <h2>Albert</h2>
    <p>albert@example.com</p>
    <a class="btn" href="{{ url('/settings') }}">Editar perfil</a>
  </section>
</main>
</body>
</html>
