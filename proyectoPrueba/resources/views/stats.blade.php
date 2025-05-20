<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Estadísticas · {{ config('app.name', 'Laravel') }}</title>
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
  max-width: 800px;
  margin: 2rem auto;
  background: var(--card);
  padding: 2rem;
  border-radius: var(--radius);
  box-shadow: 0 6px 12px rgba(0,0,0,.4);
}
h1 {
  margin-bottom: 1rem;
}
.stats-container {
  display: flex;
  gap: 2rem;
  justify-content: space-around;
}
.stat {
  background: #152841;
  padding: 1rem 2rem;
  border-radius: 12px;
  text-align: center;
  flex: 1;
}
.stat h2 {
  font-size: 2rem;
  margin-bottom: 0.5rem;
  color: var(--accent);
}
.stat p {
  font-weight: 700;
  font-size: 1.1rem;
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
    <a href="{{ url('/messages') }}">Mensajes</a>
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('/logout') }}">Salir</a>
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
