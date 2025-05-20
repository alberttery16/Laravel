<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Dashboard · {{ config('app.name', 'Laravel') }}</title>
<style>
:root {
  --bg:#0f172a; --card:#1e293b; --accent:#00e0ff; --text:#f1f5f9; --radius:14px; --shadow:0 4px 12px rgba(0,0,0,.25);
}
* {
  box-sizing:border-box;
  margin:0;
  padding:0;
  font-family:system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
}
body {
  background: var(--bg);
  color: var(--text);
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
header {
  padding: 1.25rem 2rem;
  background: #020617;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: var(--shadow);
}
header nav a {
  color: var(--text);
  text-decoration: none;
  margin-left: 1.5rem;
  font-weight: 600;
  transition: color .3s;
}
header nav a:hover {
  color: var(--accent);
}
main {
  flex: 1;
  padding: 2rem;
  max-width: 1000px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
  gap: 1.5rem;
}
.card {
  background: var(--card);
  border-radius: var(--radius);
  padding: 1.75rem 1.5rem;
  box-shadow: var(--shadow);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: transform .3s ease, box-shadow .3s ease;
  user-select:none;
}
.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 18px rgba(0,224,255,.6);
}
.card svg {
  width: 48px;
  height: 48px;
  margin-bottom: 1rem;
  fill: var(--accent);
}
.card span {
  font-weight: 700;
  font-size: 1.1rem;
}
</style>
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
    <a href="{{ url('/logout') }}">Salir</a>
  </nav>
</header>
<main>
  <a href="{{ url('/profile') }}" class="card" aria-label="Perfil">
    <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
    <span>Perfil</span>
  </a>
  <a href="{{ url('/settings') }}" class="card" aria-label="Ajustes">
    <svg viewBox="0 0 24 24"><path d="M19.43 12.98l1.77-1.77-1.41-1.41-1.77 1.77a7.93 7.93 0 0 0-2.7-1.56l-.27-2.13h-2.14l-.27 2.13a7.95 7.95 0 0 0-2.7 1.56l-1.77-1.77-1.41 1.41 1.77 1.77a7.95 7.95 0 0 0-1.56 2.7l-2.13.27v2.14l2.13.27a7.95 7.95 0 0 0 1.56 2.7l-1.77 1.77 1.41 1.41 1.77-1.77a7.93 7.93 0 0 0 2.7 1.56l.27 2.13h2.14l.27-2.13a7.95 7.95 0 0 0 2.7-1.56l1.77 1.77 1.41-1.41-1.77-1.77a7.95 7.95 0 0 0 1.56-2.7l2.13-.27v-2.14l-2.13-.27a7.95 7.95 0 0 0-1.56-2.7zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
    <span>Ajustes</span>
  </a>
  <a href="{{ url('/tasks') }}" class="card" aria-label="Tareas">
    <svg viewBox="0 0 24 24"><path d="M21 7L9 19l-5-5"/></svg>
    <span>Tareas</span>
  </a>
  <a href="{{ url('/stats') }}" class="card" aria-label="Estadísticas">
    <svg viewBox="0 0 24 24"><path d="M3 17h4v-7H3v7zm6 0h4v-4h-4v4zm6 0h4v-10h-4v10z"/></svg>
    <span>Estadísticas</span>
  </a>
  <a href="{{ url('/messages') }}" class="card" aria-label="Mensajes">
    <svg viewBox="0 0 24 24"><path d="M21 6h-2v9H7v2h9l4 4V6z"/></svg>
    <span>Mensajes</span>
  </a>
  <a href="{{ url('/calendar') }}" class="card" aria-label="Calendario">
    <svg viewBox="0 0 24 24"><path d="M3 8h18v13H3zM7 1v4M17 1v4"/></svg>
    <span>Calendario</span>
  </a>
  <a href="{{ url('/logout') }}" class="card" aria-label="Salir">
    <svg viewBox="0 0 24 24"><path d="M16 13v-2h-5v-3l-5 4 5 4v-3h5z"/></svg>
    <span>Salir</span>
  </a>
</main>
</body>
</html>