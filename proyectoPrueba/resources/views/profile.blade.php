<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"><title>Perfil · {{ config('app.name','Laravel') }}</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
:root{--bg:#0f172a;--card:#1e293b;--accent:#00e0ff;--text:#f1f5f9;--radius:14px}
*{box-sizing:border-box;margin:0;padding:0;font-family:Inter,system-ui,sans-serif}
body{background:var(--bg);color:var(--text);display:flex;flex-direction:column;min-height:100vh}
header{padding:1.25rem 2rem;background:#020617;display:flex;justify-content:space-between;align-items:center}
header a{color:var(--text);margin-left:1.25rem;text-decoration:none}
main{flex:1;display:flex;justify-content:center;align-items:center;padding:2rem}
.card{background:var(--card);padding:2.5rem 3rem;border-radius:var(--radius);width:100%;max-width:420px;text-align:center}
.avatar{width:96px;height:96px;border-radius:50%;margin-inline:auto 1rem;background:#334155;font-size:2.5rem;display:flex;justify-content:center;align-items:center}
h2{margin:1rem 0 .5rem;font-size:1.5rem}
p{opacity:.8;margin-bottom:1.5rem}
.btn{display:inline-block;padding:.6rem 1.4rem;background:var(--accent);color:#000;border-radius:8px;font-weight:600;text-decoration:none}
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
  <section class="card">
    <div class="avatar">A</div>
    <h2>Albert</h2>
    <p>albert@example.com</p>
    <a class="btn" href="{{ url('/settings') }}">Editar perfil</a>
  </section>
</main>
</body>
</html>
