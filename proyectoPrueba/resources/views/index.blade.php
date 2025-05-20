<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Inicio · {{ config('app.name', 'Laravel') }}</title>
<style>
:root {
  --bg:#0f172a; --card:#1e293b; --accent:#00e0ff; --text:#f1f5f9; --radius:14px;
}
* {
  box-sizing: border-box; margin: 0; padding: 0; font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
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
  box-shadow: 0 2px 8px rgba(0,0,0,.5);
}
header nav a {
  color: var(--text);
  text-decoration: none;
  margin-left: 1.5rem;
  font-weight: 600;
  transition: color 0.3s;
}
header nav a:hover {
  color: var(--accent);
}
main {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: .05em;
  user-select: none;
}
</style>
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
    <a href="{{ url('/logout') }}">Salir</a>
  </nav>
</header>
<main>
  ¡Bienvenido a tu página web!
</main>
</body>
</html>
</html>
