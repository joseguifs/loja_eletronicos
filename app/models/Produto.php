<?php

class Produto {

    private $conn;

    public function __construct($pdo)
    {
        $this->conn = $pdo;
    }

    public function all()
    {
        $stmt = $this->conn->query("
            SELECT 
                produtos.*,
                categorias.nome AS categoria_nome,
                marcas.nome AS marca_nome
            FROM produtos
            LEFT JOIN categorias ON produtos.categoria_id = categorias.id
            LEFT JOIN marcas ON produtos.marca_id = marcas.id
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare("
            SELECT 
                produtos.*,
                categorias.nome AS categoria_nome,
                marcas.nome AS marca_nome
            FROM produtos
            LEFT JOIN categorias ON produtos.categoria_id = categorias.id
            LEFT JOIN marcas ON produtos.marca_id = marcas.id
            WHERE produtos.id = ?
        ");

        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nome, $descricao, $preco, $imagem_url, $categoria_id, $marca_id)
    {
        $stmt = $this->conn->prepare("
            INSERT INTO produtos (nome, descricao, preco, imagem_url, categoria_id, marca_id)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $stmt->execute([$nome, $descricao, $preco, $imagem_url, $categoria_id, $marca_id]);
    }

    public function update($id, $nome, $descricao, $preco, $imagem_url, $categoria_id, $marca_id)
    {
        $stmt = $this->conn->prepare("
            UPDATE produtos
            SET nome = ?, descricao = ?, preco = ?, imagem_url = ?, categoria_id = ?, marca_id = ?
            WHERE id = ?
        ");

        $stmt->execute([$nome, $descricao, $preco, $imagem_url, $categoria_id, $marca_id, $id]);
    }
}