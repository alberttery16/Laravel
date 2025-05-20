<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Mensajes · {{ config('app.name', 'Laravel') }}</title>
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
}
.message {
  background: #152841;
  border-radius: 12px;
  margin-bottom: 1rem;
  padding: 1rem 1.5rem;
}
.message h3 {
  margin: 0 0 0.5rem 0;
  color: var(--accent);
}
.message p {
  margin: 0;
}
form textarea {
  width: 100%;
  border-radius: 12px;
  padding: 1rem;
  border: none;
  resize: vertical;
  margin-top: 1rem;
  font-size: 1rem;
}
form button {
  margin-top: 1rem;
  background: var(--accent);
  color: var(--bg);
  padding: .75rem 1.5rem;
  font-weight: 700;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  transition: background .3s;
}
form button:hover {
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
    <a href="{{ url('/settings') }}">Ajustes</a>
    <a href="{{ url('/stats') }}">Estadísticas</a>
    <a href="{{ url('/calendar') }}">Calendario</a>
    <a href="{{ url('/logout') }}">Salir</a>
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
