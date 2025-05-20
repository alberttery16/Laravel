<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Calendario · {{ config('app.name', 'Laravel') }}</title>
<style>
:root {
  --bg:#0f172a; --card:#1e293b; --accent:#00e0ff; --text:#f1f5f9; --radius:14px;
}
body {
  background: var(--bg);
  color: var(--text);
  font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
  margin: 0; padding: 0;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
header {
  background: #020617;
  padding: 1rem 2rem;
  box-shadow: 0 2px 8px rgba(0,0,0,.5);
}
header nav a {
  color: var(--text);
  margin-right: 1.5rem;
  font-weight: 600;
  text-decoration: none;
  transition: color .3s;
}
header nav a:hover {
  color: var(--accent);
}
main {
  max-width: 700px;
  margin: 2rem auto;
  background: var(--card);
  padding: 2rem;
  border-radius: var(--radius);
  box-shadow: 0 6px 12px rgba(0,0,0,.4);
}
h1 {
  margin-bottom: 1rem;
  text-align: center;
}
.calendar {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1rem;
  text-align: center;
}
.day {
  background: #152841;
  padding: 1rem 0;
  border-radius: 12px;
  font-weight: 600;
}
.date {
  background: #0d3c61;
  margin-top: 0.25rem;
  border-radius: 8px;
  padding: 0.5rem 0;
}
.today {
  background: var(--accent);
  color: var(--bg);
  font-weight: 700;
}
</style>
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
    <a href="{{ url('/logout') }}">Salir</a>
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
