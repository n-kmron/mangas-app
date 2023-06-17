<!DOCTYPE html>
<html lang="fr">

<head>
          <meta charset="UTF-8">
          <title>Mes mangas - @yield('title')</title>
          <link rel="stylesheet" type="text/css" href="/css/style.css">
          <link rel="stylesheet" type="text/css" href="/css/form.css">
          <link rel="stylesheet" href="/css/swiper-bundle.min.css" />

          <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
          <header>
                    <nav>
                              <a href="/">Accueil</a>
                              <a href="/serie/create">Nouvelle série</a>
                    </nav>
          </header>
          <main>
                    <div class="content">
                              @yield('content')
                    </div>
          </main>
          <script src="js/swiper-bundle.min.js"></script>
          <script src="js/script.js"></script>
</body>

</html>