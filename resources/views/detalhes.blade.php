<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detalhe de Produto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        
    </head>
    <body>
        <h1>Detalhe do Produto <?= $p->nome ?> </h1>
        <ul>
            <li>
                Descrição: <?= $p->descricao ?>
            </li>
        </ul>
    </body>
</html>
