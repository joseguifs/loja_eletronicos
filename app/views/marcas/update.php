<link rel="stylesheet" href="/loja_eletronicos/app/css/marca.css">

<div class="container">

    <h1>Editar Marca</h1>

    <form action="?action=marca_update" method="POST">
        <input type="hidden" name="id" value="<?= $mar['id'] ?>">

        <label for="nome">Nome da Marca</label>
        <input 
            type="text" 
            name="nome" 
            id="nome" 
            value="<?= htmlspecialchars($mar['nome']) ?>" 
            required
        >

        <button type="submit" class="btn-edit">Atualizar</button>
        <a href="?action=marcas">Cancelar</a>
    </form>

</div>