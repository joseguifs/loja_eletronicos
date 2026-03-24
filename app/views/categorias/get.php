<!DOCTYPE html>
<html lang="pt-BR">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/loja_eletronicos/app/css/categoria.css">

        <title>Get</title>

    </head>
    
    <body>
    
        <div class="container">

            <h1>Detalhes da Categoria</h1>

            <p><strong>ID:</strong> <?= $cat['id'] ?></p>

            <p><strong>Nome:</strong> <?= $cat['nome'] ?></p>

            <br>

            <button type="button" onclick="window.location.href='?action=categorias'">
                Voltar
            </button>

        </div>

    </body>

</html>