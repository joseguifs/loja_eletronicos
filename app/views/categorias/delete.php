<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/loja_eletronicos/app/css/style.css">

        <title>Delete</title>

    </head>
    <body>
    
        <div class="container">

            <h1>Excluir Categoria</h1>

            <p>Tem certeza que deseja excluir esta categoria?</p>

            <p><strong>ID:</strong> <?= $cat['id'] ?></p>

            <p><strong>Nome:</strong> <?= $cat['nome'] ?></p>

            <form method="POST" action="?action=categoria_delete">

                <input type="hidden" name="id" value="<?= $cat['id'] ?>">

                <button type="submit">
                    Confirmar Exclusão
                </button>
                
            </form>

            <br>

            <button type="button" onclick="window.location.href='?action=categorias'">
                Cancelar
            </button>

        </div>

    </body>

</html>