<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listagem de Produtos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        <table class="table">
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td>Nome: <?= $p->nome ?></td>
                <td>Valor: <?= $p->valor ?></td>
                <td>Quantidade: <?= $p->quantidade ?></td>
                <td>Descrição: <?= $p->descricao ?></td>
                <td><a href="/produtos/mostra?id=<?= $p->id ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
            </tr>  
        <?php endforeach ?>
        </table>
    </body>
</html>
