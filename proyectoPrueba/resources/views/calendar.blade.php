<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Calendario · {{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <nav>
    <a href="{{ url('/') }}">Inicio</a>
    <a href="{{ url('/dashboard') }}">Dashboard</a>
    <a href="{{ url('/profile') }}">Perfil</a>
    <a href="{{ url('/settings') }}">Ajustes</a>
    <a href="{{ url('/stats') }}">Estadísticas</a>
    <a href="{{ url('/messages') }}">Mensajes</a>
    <a href="{{ url('https://google.com') }}">Salir</a>
  </nav>
</header>
<main>
  <h1>Calendario</h1>
  <div class="calendar">
    <div class="day">Lun</div>
    <div class="day">Mar</div>
    <div class="day">Mié</div>
    <div class="day">Jue</div>
    <div class="day">Vie</div>
    <div class="day">Sáb</div>
    <div class="day">Dom</div>

    <div class="date"></div>
    <div class="date"></div>
    <div class="date"></div>
    <div class="date"></div>
    <div class="date today">19</div>
    <div class="date">20</div>
    <div class="date">21</div>

  </div>
</main>
</body>
</html>
