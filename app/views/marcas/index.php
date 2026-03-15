<link rel="stylesheet" href="/loja_eletronicos/app/css/marca.css">

<div class="container">

<h1>Lista de Marcas</h1>

<a class="btn-create" href="?action=marca_create">Nova Marca</a>

<table>

<tr>
    <th>Nome</th>
    <th>Ações</th>
</tr>

<?php foreach($marcas as $m): ?>

<tr>
    <td><?= htmlspecialchars($m['nome']) ?></td>
    <td>
        <a class="btn-view" href="?action=marca_find&id=<?= $m['id'] ?>">Ver</a>
        <a class="btn-edit" href="?action=marca_edit&id=<?= $m['id'] ?>">Editar</a>
        <a class="btn-delete" href="?action=marca_delete&id=<?= $m['id'] ?>">Excluir</a>
    </td>
</tr>

<?php endforeach; ?>

</table>

</div>