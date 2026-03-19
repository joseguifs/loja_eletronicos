<link rel="stylesheet" href="/loja_eletronicos/app/css/marca.css">

<link rel="stylesheet" href="/loja_eletronicos/app/css/marca.css">

<div class="container">

    <h1>Detalhes da Marca</h1>

    <p><strong>ID:</strong> <?= $mar['id'] ?></p>
    <p><strong>Nome:</strong> <?= htmlspecialchars($mar['nome']) ?></p>

    <div class="actions">
        <a class="btn-edit" href="?action=marca_edit&id=<?= $mar['id'] ?>">Editar</a>
        <a class="btn-delete" href="?action=marca_delete&id=<?= $mar['id'] ?>">Excluir</a>
        <a class="btn-back" href="?action=marcas">Voltar</a>
    </div>

</div>