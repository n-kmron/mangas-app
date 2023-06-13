<!DOCTYPE html>
<html lang="fr">

<head>
          <meta charset="UTF-8">
          <title>58008 - @yield('title')</title>
          <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>
          <header>
                    <h1>WEBG4 - Serie - Manga</h1>
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
                    <p>WEBG4 - ARO - g58008 NOUPOUE Cameron</p>
          </footer>
</body>

</html>