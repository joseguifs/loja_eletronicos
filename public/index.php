<?php

require_once __DIR__ . "/../app/controllers/MarcaController.php";
require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . "/../app/controllers/ProdutoController.php";

$action = $_GET['action'] ?? 'produtos';

$controller = new MarcaController();

$action = $_GET['action'] ?? 'produtos';

switch ($action) {
    case 'categorias':
        $controller = new CategoriaController();
        $controller->index();
        break;

    case 'categoria_create':
        $controller = new CategoriaController();
        $controller->create();
        break;

    case 'categoria_find':
        $controller = new CategoriaController();
        $controller->find();
        break;

    case 'categoria_store':
        $controller = new CategoriaController();
        $controller->store();
        break;

    case 'categoria_edit':
        $controller = new CategoriaController();
        $controller->edit();
        break;

    case 'categoria_update':
        $controller = new CategoriaController();
        $controller->update();
        break;

    case 'categoria_delete':
        $controller = new CategoriaController();
        $controller->delete();
        break;

    case 'marcas':
        $controller = new MarcaController();
        $controller->index();
        break;

    case 'marca_create':
        $controller = new MarcaController();
        $controller->create();
        break;
    
    case 'marca_find':
        $controller = new MarcaController();
        $controller->find();
        break;

    case 'marca_store':
        $controller = new MarcaController();
        $controller->store();
        break;

    case 'marca_edit':
        $controller = new MarcaController();
        $controller->edit();
        break;

    case 'marca_update':
        $controller = new MarcaController();
        $controller->update();
        break;

    case 'marca_delete':
        $controller = new MarcaController();
        $controller->delete();
        break;

    case 'produtos':
        $controller = new ProdutoController();
        $controller->index();
        break;

    case 'produto_create':
        $controller = new ProdutoController();
        $controller->create();
        break;

    case 'produto_find':
        $controller = new ProdutoController();
        $controller->find();
        break;

    case 'produto_store':
        $controller = new ProdutoController();
        $controller->store();
        break;

    case 'produto_edit':
        $controller = new ProdutoController();
        $controller->edit();
        break;

    case 'produto_update':
        $controller = new ProdutoController();
        $controller->update();
        break;

    case 'produto_delete':
        $controller = new ProdutoController();
        $controller->delete();
        break;
} 