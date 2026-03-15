<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/loja_eletronicos/app/css/produto.css">
</head>
<body>

<div class="container">
    <h1>Editar Produto</h1>

    <form action="?action=produto_update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $prod['id'] ?>">

        <label for="nome">Nome do Produto</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($prod['nome']) ?>" required>

        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" rows="5"><?= htmlspecialchars($prod['descricao']) ?></textarea>

        <label for="preco">Preço</label>
        <input type="number" name="preco" id="preco" step="0.01" min="0" value="<?= $prod['preco'] ?>" required>

        <label for="categoria_id">Categoria</label>
        <select name="categoria_id" id="categoria_id" required>
            <option value="">Selecione uma categoria</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria['id'] ?>" <?= ($prod['categoria_id'] == $categoria['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($categoria['nome']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="marca_id">Marca</label>
        <select name="marca_id" id="marca_id" required>
            <option value="">Selecione uma marca</option>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?= $marca['id'] ?>" <?= ($prod['marca_id'] == $marca['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($marca['nome']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php if (!empty($prod['imagem_url'])): ?>
            <p><strong>Imagem atual:</strong></p>
            <img src="/loja_eletronicos/<?= htmlspecialchars($prod['imagem_url']) ?>" alt="Imagem do produto" width="120">
            <br><br>
        <?php endif; ?>

        <label for="imagem">Nova Imagem</label>
        <input type="file" name="imagem" id="imagem" accept="image/*">

        <button type="submit">Atualizar Produto</button>
        <a href="?action=produtos" class="btn-view" style="margin-left: 10px;">Voltar</a>
    </form>
</div>

</body>
</html>