<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listagem de Produtos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">

        <nav class="navbar navbar-default">
          <div class="container-fluid">

            <div class="navbar-header">      
              <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ action('ProdutoController@lista') }}">Listagem</a></li>
              <li><a href="{{ action('ProdutoController@novo') }}">Novo</a></li>
            </ul>

          </div>
        </nav>

        @yield('conteudo')
        </div>
    </body>
</html>
