<!DOCTYPE html>
<html lang="fr">

<head>
          <meta charset="UTF-8">
          <title>Mes mangas - @yield('title')</title>
          <link rel="stylesheet" type="text/css" href="/style.css">
          <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
          <header>
                    <h1>Mon catalogue de mangas</h1>
          </header>
          <main>
                    <nav>
                              <a href="/">Accueil</a>
                              <a href="/serie/create">Nouvelle série</a>
                    </nav>
                    <div class="content">
                              @yield('content')
                    </div>
          </main>
          <footer>
                    <p>Entièrement créé et développé par Cameron Noupoue</p>
          </footer>
</body>

</html>