<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Estadísticas · {{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <nav>
    <a href="{{ url('/') }}">Inicio</a>
    <a href="{{ url('/dashboard') }}">Dashboard</a>
    <a href="{{ url('/profile') }}">Perfil</a>
    <a href="{{ url('/settings') }}">Ajustes</a>
    <a href="{{ url('/messages') }}">Mensajes</a>
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('https://google.com') }}">Salir</a>
  </nav>
</header>
<main>
  <h1>Estadísticas</h1>
  <div class="stats-container">
    <div class="stat">
      <h2>42</h2>
      <p>Tareas Completadas</p>
    </div>
    <div class="stat">
      <h2>10</h2>
      <p>Mensajes Nuevos</p>
    </div>
    <div class="stat">
      <h2>7</h2>
      <p>Días Activo</p>
    </div>
  </div>
</main>
</body>
</html>
