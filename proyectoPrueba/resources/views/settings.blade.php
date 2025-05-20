<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Ajustes · {{ config('app.name', 'Laravel') }}</title>
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
  max-width: 600px;
  margin: 2rem auto;
  background: var(--card);
  padding: 2rem;
  border-radius: var(--radius);
  box-shadow: 0 6px 12px rgba(0,0,0,.4);
}
h1 {
  margin-bottom: 1rem;
}
label {
  display: block;
  margin-top: 1rem;
  font-weight: 600;
}
input[type="checkbox"] {
  margin-right: .5rem;
}
button {
  margin-top: 1.5rem;
  background: var(--accent);
  color: var(--bg);
  padding: .75rem 1.5rem;
  font-weight: 700;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  transition: background .3s;
}
button:hover {
  background: #00b8d6;
}
</style>
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
    <a href="{{ url('/logout') }}">Salir</a>
  </nav>
</header>
<main>
  <h1>Ajustes</h1>
  <form method="POST" action="{{ url('/settings/update') }}">
    @csrf
    <label><input type="checkbox" name="dark_mode" {{ old('dark_mode', $settings->dark_mode ?? false) ? 'checked' : '' }}> Modo oscuro</label>
    <label><input type="checkbox" name="notifications" {{ old('notifications', $settings->notifications ?? true) ? 'checked' : '' }}> Recibir notificaciones</label>
    <button type="submit">Guardar Ajustes</button>
  </form>
</main>
</body>
</html>
