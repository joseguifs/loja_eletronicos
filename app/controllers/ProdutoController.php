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

    public function store()
    {
        global $pdo;

        $nome = trim($_POST['nome']);
        $descricao = trim($_POST['descricao']);
        $preco = $_POST['preco'];
        $categoria_id = !empty($_POST['categoria_id']) ? $_POST['categoria_id'] : null;
        $marca_id = !empty($_POST['marca_id']) ? $_POST['marca_id'] : null;

        $imagem_url = null;

        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            $extensao = strtolower(pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));
            $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

            if (!in_array($extensao, $extensoesPermitidas)) {
                die("Formato de imagem inválido. Envie JPG, JPEG, PNG, GIF ou WEBP.");
            }

            $pastaUploads = __DIR__ . "/../../uploads/";

            if (!is_dir($pastaUploads)) {
                mkdir($pastaUploads, 0777, true);
            }

            $nomeArquivo = uniqid() . "_" . time() . "." . $extensao;
            $caminhoCompleto = $pastaUploads . $nomeArquivo;

            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoCompleto)) {
                $imagem_url = "uploads/" . $nomeArquivo;
            }
        }

        $produto = new Produto($pdo);
        $produto->create($nome, $descricao, $preco, $imagem_url, $categoria_id, $marca_id);

        header("Location: ?action=produtos");
        exit;
    }

    public function find()
    {
        global $pdo;

        $id = $_GET['id'];

        $produto = new Produto($pdo);
        $prod = $produto->find($id);

        require __DIR__ . "/../views/produtos/get.php";
    }

    