<link rel="stylesheet" href="/loja_eletronicos/app/css/marca.css">

<div class="container">
    <h1>Cadastrar Marca</h1>

    <form action="?action=marca_store" method="POST">
        <label for="nome">Nome da Marca</label>
        <input type="text" name="nome" id="nome" required>

        <button type="submit" class="btn-create">Salvar</button>
        <a href="?action=marcas">Cancelar</a>
    </form>
</div>