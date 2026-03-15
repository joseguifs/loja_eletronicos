<?php

require_once "../config/database.php";
require_once "../app/models/Produto.php";
require_once "../app/models/Categoria.php";
require_once "../app/models/Marca.php";

class ProdutoController {

    public function index()
    {
        global $pdo;

        $produto = new Produto($pdo);
        $produtos = $produto->all();

        require __DIR__ . "/../views/produtos/index.php";
    }

    public function show()
    {
        global $pdo;

        $id = $_GET['id'];

        $produto = new Produto($pdo);
        $prod = $produto->find($id);

        require __DIR__ . "/../views/produtos/get.php";
    }

    public function create()
    {
        global $pdo;

        $categoria = new Categoria($pdo);
        $categorias = $categoria->all();

        $marca = new Marca($pdo);
        $marcas = $marca->all();

        require __DIR__ . "/../views/produtos/create.php";
    }