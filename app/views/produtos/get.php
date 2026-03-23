<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Produto</title>
    <link rel="stylesheet" href="/loja_eletronicos/app/css/produto.css">
</head>
<body>

<div class="container">
    <h1>Detalhes do Produto</h1>

    <div class="produto-detalhe">
        <div class="produto-imagem">
            <?php if (!empty($prod['imagem_url'])): ?>
                <img src="/loja_eletronicos/<?= htmlspecialchars($prod['imagem_url']) ?>" alt="<?= htmlspecialchars($prod['nome']) ?>">
            <?php else: ?>
                <div class="sem-imagem">Sem imagem</div>
            <?php endif; ?>
        </div>

        <div class="produto-info">
            <p><strong>ID:</strong> <?= $prod['id'] ?></p>
            <p><strong>Nome:</strong> <?= htmlspecialchars($prod['nome']) ?></p>
            <p><strong>Descrição:</strong> <?= !empty($prod['descricao']) ? htmlspecialchars($prod['descricao']) : 'Sem descrição' ?></p>
            <p><strong>Preço:</strong> R$ <?= number_format($prod['preco'], 2, ',', '.') ?></p>
            <p><strong>Categoria:</strong> <?= !empty($prod['categoria_nome']) ? htmlspecialchars($prod['categoria_nome']) : 'Sem categoria' ?></p>
            <p><strong>Marca:</strong> <?= !empty($prod['marca_nome']) ? htmlspecialchars($prod['marca_nome']) : 'Sem marca' ?></p>
            <p><strong>Data de cadastro:</strong> <?= $prod['created_at'] ?></p>
        </div>
    </div>

    <div class="produto-acoes">
        <a href="?action=produto_edit&id=<?= $prod['id'] ?>" class="btn-edit">Editar</a>
        <a href="?action=produto_delete&id=<?= $prod['id'] ?>" class="btn-delete">Excluir</a>
        <a href="?action=produtos" class="btn-view">Voltar</a>
    </div>
</div>

</body>
</html>