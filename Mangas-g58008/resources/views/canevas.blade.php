<!DOCTYPE html>
<html lang="fr">

<head>
          <meta charset="UTF-8">
          <title>Cameron - @yield('title')</title>
          <link rel="stylesheet" type="text/css" href="style.css">
          <script defer src="script.js"></script>
</head>

<body>
          <header>
                    <h1>WEBII - Serie - Manga</h1>
          </header>
          <main>
                    <nav>
                              <a href="/">Accueil</a>
                              <a href="#">Nouvelle série</a>
                    </nav>
                    <div class="content">
                              @yield('content')
                    </div>
          </main>
          <footer>
                    <p>WEBG4 - ARO - g58008 NOUPOUE Cameron</p>
          </footer>
</body>

</html>