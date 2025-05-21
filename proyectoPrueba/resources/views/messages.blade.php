<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Mensajes · {{ config('app.name', 'Laravel') }}</title>
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
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('https://google.com') }}">Salir</a>
  </nav>
</header>
<main>
  <h1>Mensajes</h1>
  <div class="message">
    <h3>Escribe tu mensaje</h3>
    <p>Una vez escrito se te atendera lo antes posible</p>
  </div>

  <form method="POST" action="{{ url('/messages/send') }}">
    @csrf
    <textarea name="message" placeholder="Escribe un mensaje..." rows="4" required></textarea>
    <button type="submit">Enviar</button>
  </form>
</main>
</body>
</html>
