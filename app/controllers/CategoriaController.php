<?php

require_once "../config/database.php";
require_once "../app/models/Categoria.php";

class CategoriaController {

    public function index()
    {
        global $pdo;

        $categoria = new Categoria($pdo);
        $categorias = $categoria->all();

        require "../app/views/categorias/index.php";
    }
    
    public function show()
    {
        global $pdo;

        $id = $_GET['id'];

        $categoria = new Categoria($pdo);
        $cat = $categoria->find($id);

        require __DIR__ . "/../views/categorias/get.php";
    }
    
     public function create()
    {
        require __DIR__ . "/../views/categorias/create.php";
    }

    public function store()
    {
        global $pdo;

        $nome = $_POST['nome'];

        $categoria = new Categoria($pdo);
        $categoria->create($nome);

        header("Location: ?action=categorias");
    }

    public function find()
    {
        global $pdo;

        $id = $_GET['id'];

        $categoria = new Categoria($pdo);

        $cat = $categoria->find($id);

        require __DIR__ . "/../views/categorias/get.php";
    }

    public function edit()
    {
        global $pdo;

        $id = $_GET['id'];

        $categoria = new Categoria($pdo);
        $cat = $categoria->find($id);

        require __DIR__ . "/../views/categorias/update.php";
    }

    public function update()
    {
        global $pdo;

        $id = $_POST['id'];
        $nome = $_POST['nome'];

        $categoria = new Categoria($pdo);
        $categoria->update($id, $nome);

        header("Location: ?action=categorias");
    }

    public function delete()
    {
        global $pdo;

        $categoria = new Categoria($pdo);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];

            $categoria->delete($id);

            header("Location: ?action=categorias");
            exit;
        }

        $id = $_GET['id'];

        $cat = $categoria->find($id);

        require __DIR__ . "/../views/categorias/delete.php";
    }
}