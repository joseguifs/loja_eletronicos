<!DOCTYPE html>
<html lang="pt-BR">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/loja_eletronicos/app/css/style.css">

        <title>Update</title>

    </head>
    <body>
   
        <div class="container">

            <h1>Editar Categoria</h1>

            <form method="POST" action="?action=categoria_update">

                <input type="hidden" name="id" value="<?= $cat['id'] ?>">

                <input type="text" name="nome" value="<?= $cat['nome'] ?>">

                <button type="submit">Atualizar</button>

            </form>

            <br>

            <button type="button" onclick="window.location.href='?action=categorias'">
                Voltar
            </button>

        </div>

    </body>
    
</html>