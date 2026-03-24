<?php

class Marca {

    private $conn;

    public function __construct($pdo)
    {
        $this->conn = $pdo;
    }

    public function all()
    {
        $stmt = $this->conn->query("SELECT * FROM marcas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM marcas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nome)
    {
        $stmt = $this->conn->prepare("INSERT INTO marcas (nome) VALUES (?)");
        $stmt->execute([$nome]);
    }

    public function update($id, $nome)
    {
        $stmt = $this->conn->prepare("UPDATE marcas SET nome = ? WHERE id = ?");
        $stmt->execute([$nome, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM marcas WHERE id = ?");
        $stmt->execute([$id]);
    }
}