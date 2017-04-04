<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listagem de Produtos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <table>
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td>Nome: <?= $p->nome ?></td>
                <td>Valor: <?= $p->valor ?></td>
                <td>Quantidade: <?= $p->descricao ?></td>
                <td>Descrição: <?= $p->quantidade ?></td>
            </tr>  
        <?php endforeach ?>
        </table>
    </body>
</html>
