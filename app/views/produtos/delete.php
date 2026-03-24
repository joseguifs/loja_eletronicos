<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
    <link rel="stylesheet" href="/loja_eletronicos/app/css/produto.css">
</head>
<body>

<div class="container">
    <h1>Excluir Produto</h1>

    <p style="margin-bottom: 20px;">
        Tem certeza que deseja excluir o produto 
        <strong><?= htmlspecialchars($prod['nome']) ?></strong>?
    </p>

    <div class="produto-imagem" style="max-width: 300px; margin-bottom: 20px;">
        <?php if (!empty($prod['imagem_url'])): ?>
            <img src="/loja_eletronicos/<?= htmlspecialchars($prod['imagem_url']) ?>" alt="<?= htmlspecialchars($prod['nome']) ?>">
        <?php else: ?>
            <div class="sem-imagem">Sem imagem</div>
        <?php endif; ?>
    </div>

    <p><strong>Categoria:</strong> <?= !empty($prod['categoria_nome']) ? htmlspecialchars($prod['categoria_nome']) : 'Sem categoria' ?></p>
    <p><strong>Marca:</strong> <?= !empty($prod['marca_nome']) ? htmlspecialchars($prod['marca_nome']) : 'Sem marca' ?></p>
    <p style="margin-bottom: 20px;"><strong>Preço:</strong> R$ <?= number_format($prod['preco'], 2, ',', '.') ?></p>

    <form action="?action=produto_delete" method="POST">
        <input type="hidden" name="id" value="<?= $prod['id'] ?>">

        <button type="submit">Confirmar Exclusão</button>
        <a href="?action=produtos" class="btn-view" style="margin-left: 10px;">Cancelar</a>
    </form>
</div>

</body>
</html>