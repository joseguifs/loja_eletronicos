<!DOCTYPE html>

<html lang="pt-BR">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/loja_eletronicos/app/css/style.css">

        <title>Index</title>

    </head>

    <body>
    
        <div class="container">

            <h1>Lista de Categorias</h1>

            <a class="btn-create" href="?action=categoria_create">Nova Categoria</a>

            <table>

                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($categorias as $c): ?>
                    <tr>
                        <td><?= $c['nome'] ?></td>
                        <td>
                            <a class="btn-view" href="?action=categoria_find&id=<?= $c['id'] ?>">Ver</a>
                            <a class="btn-edit" href="?action=categoria_edit&id=<?= $c['id'] ?>">Editar</a>
                            <a class="btn-delete" href="?action=categoria_delete&id=<?= $c['id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>

        </div>

    </body>
    
</html>