<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Ajustes · {{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <nav>
    <a href="{{ url('/') }}">Inicio</a>
    <a href="{{ url('/dashboard') }}">Dashboard</a>
    <a href="{{ url('/profile') }}">Perfil</a>
    <a href="{{ url('/stats') }}">Estadísticas</a>
    <a href="{{ url('/messages') }}">Mensajes</a>
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('https://google.com') }}">Salir</a>
  </nav>
</header>
<main>
  <h1>Ajustes</h1>
  <form method="POST" action="{{ url('/settings/update') }}">
    @csrf
    <label><input type="checkbox" name="dark_mode" {{ old('dark_mode', $settings->dark_mode ?? false) ? 'checked' : '' }}> Modo oscuro</label>
    <label><input type="list" name="notifications" {{ old('notifications', $settings->notifications ?? true) ? 'checked' : '' }}> Recibir notificaciones</label>
    <button type="submit">Guardar Ajustes</button>
  </form>
</main>
</body>
</html>
