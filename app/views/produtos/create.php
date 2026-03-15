<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="/loja_eletronicos/app/css/produto.css">
</head>
<body>

<div class="container">
    <h1>Cadastrar Produto</h1>

    <form action="?action=produto_store" method="POST" enctype="multipart/form-data">

        <label for="nome">Nome do Produto</label>
        <input type="text" name="nome" id="nome" required>

        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" rows="5"></textarea>

        <label for="preco">Preço</label>
        <input type="number" name="preco" id="preco" step="0.01" min="0" required>

        <label for="categoria_id">Categoria</label>
        <select name="categoria_id" id="categoria_id" required>
            <option value="">Selecione uma categoria</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria['id'] ?>">
                    <?= htmlspecialchars($categoria['nome']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="marca_id">Marca</label>
        <select name="marca_id" id="marca_id" required>
            <option value="">Selecione uma marca</option>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?= $marca['id'] ?>">
                    <?= htmlspecialchars($marca['nome']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="imagem">Imagem do Produto</label>
        <input type="file" name="imagem" id="imagem" accept="image/*">

        <button type="submit">Salvar Produto</button>
        <a href="?action=produtos" class="btn-view" style="margin-left: 10px;">Voltar</a>
    </form>
</div>

</body>
</html>