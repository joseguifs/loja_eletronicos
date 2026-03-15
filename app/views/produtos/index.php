<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="/loja_eletronicos/app/css/produto.css">
</head>
<body>

<div class="container">
    <h1>Lista de Produtos</h1>

    <a href="?action=produto_create" class="btn-create">Cadastrar Produto</a>

    <?php if (empty($produtos)): ?>
        <p>Nenhum produto cadastrado.</p>
    <?php else: ?>
        <div class="produtos-grid">
            <?php foreach ($produtos as $produto): ?>
                <div class="produto-card">
                    
                    <div class="produto-imagem">
                        <?php if (!empty($produto['imagem_url'])): ?>
                            <img src="/loja_eletronicos/<?= htmlspecialchars($produto['imagem_url']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">
                        <?php else: ?>
                            <div class="sem-imagem">Sem imagem</div>
                        <?php endif; ?>
                    </div>

                    <div class="produto-info">
                        <h2><?= htmlspecialchars($produto['nome']) ?></h2>

                        <p><strong>Descrição:</strong> 
                            <?= !empty($produto['descricao']) ? htmlspecialchars($produto['descricao']) : 'Sem descrição' ?>
                        </p>

                        <p><strong>Preço:</strong> 
                            R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
                        </p>

                        <p><strong>Categoria:</strong> 
                            <?= !empty($produto['categoria_nome']) ? htmlspecialchars($produto['categoria_nome']) : 'Sem categoria' ?>
                        </p>

                        <p><strong>Marca:</strong> 
                            <?= !empty($produto['marca_nome']) ? htmlspecialchars($produto['marca_nome']) : 'Sem marca' ?>
                        </p>
                    </div>

                    <div class="produto-acoes">
                        <a href="?action=produto_find&id=<?= $produto['id'] ?>" class="btn-view">Ver</a>
                        <a href="?action=produto_edit&id=<?= $produto['id'] ?>" class="btn-edit">Editar</a>
                        <a href="?action=produto_delete&id=<?= $produto['id'] ?>" class="btn-delete">Excluir</a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>