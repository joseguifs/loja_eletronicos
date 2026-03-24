<?php

require_once "../config/database.php";
require_once "../app/models/Marca.php";

class MarcaController {

    public function index()
    {
        global $pdo;

        $marca = new Marca($pdo);
        $marcas = $marca->all();

        require "../app/views/marcas/index.php";
    }
    
    public function show()
    {
        global $pdo;

        $id = $_GET['id'];

        $marca = new Marca($pdo);
        $mar = $marca->find($id);

        require __DIR__ . "/../views/marcas/get.php";
    }
    
    public function create()
    {
        require __DIR__ . "/../views/marcas/create.php";
    }

    public function store()
    {
        global $pdo;

        $nome = $_POST['nome'];

        $marca = new Marca($pdo);
        $marca->create($nome);

        header("Location: ?action=marcas");
        exit;
    }

    public function find()
    {
        global $pdo;

        $id = $_GET['id'];

        $marca = new Marca($pdo);
        $mar = $marca->find($id);

        require __DIR__ . "/../views/marcas/get.php";
    }

    public function edit()
    {
        global $pdo;

        $id = $_GET['id'];

        $marca = new Marca($pdo);
        $mar = $marca->find($id);

        require __DIR__ . "/../views/marcas/update.php";
    }

    public function update()
    {
        global $pdo;

        $id = $_POST['id'];
        $nome = $_POST['nome'];

        $marca = new Marca($pdo);
        $marca->update($id, $nome);

        header("Location: ?action=marcas");
        exit;
    }

    public function delete()
    {
        global $pdo;

        $marca = new Marca($pdo);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            $marca->delete($id);

            header("Location: ?action=marcas");
            exit;
        }

        $id = $_GET['id'];

        $mar = $marca->find($id);

        require __DIR__ . "/../views/marcas/delete.php";
    }
}