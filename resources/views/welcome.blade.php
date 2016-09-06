<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel do Corretor</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/materialize.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="navbar-fixed">
      <nav class="red darken-3">
        <div class="nav-wrapper container">
          <a class="brand-logo" href="{{ url('/') }}">Pagina Principal</a>
          <ul class="right hide-on-med-and-down">
            @if (Route::has('login'))
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
          </ul>
        </div>
      </nav>
    </div>

    <div class="">


    </div>


    <div class="">
      <div class="">
        Painel Corretor de Imóveis
      </div>
    </div>

    <script src="/js/jquery-3.1.0.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/js.js"></script>
  </body>
</html>
