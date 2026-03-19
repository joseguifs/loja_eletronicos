<link rel="stylesheet" href="/loja_eletronicos/app/css/style.css">

<div class="container">
    <h1>Excluir Marca</h1>

    <p>Tem certeza que deseja excluir a marca <strong><?= htmlspecialchars($mar['nome']) ?></strong>?</p>

    <form action="?action=marca_delete" method="POST">
        <input type="hidden" name="id" value="<?= $mar['id'] ?>">

        <button type="submit" class="btn-delete">Confirmar Exclusão</button>
        <a href="?action=marcas">Cancelar</a>
    </form>
</div>