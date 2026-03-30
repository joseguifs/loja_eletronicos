# 🛒 Loja de Eletrônicos

Projeto desenvolvido para a disciplina de **Engenharia de Software** ministrada por **Edeilson Milhomem da Silva** na **UFT (Universidade Federal do Tocantins)** em **2026.1**

**Link para video de funcionamento** https://youtu.be/eeHE1HWRZVI

## 📌 Descrição

Este projeto consiste em um sistema web de uma loja de eletrônicos, com funcionalidades voltadas para gerenciamento de produtos.
## 🚀 Tecnologias Utilizadas

- **PHP Nativo** (sem frameworks)
- **XAMPP** (ambiente de desenvolvimento)
- **MariaDB** (banco de dados)
- **HTML e CSS**

## 👨‍💻 Integrantes do Projeto

- **José Guilherme Ferreira Sobrinho**
- **Mario Felipe**  
- **Jose Carlos**  
- **Matheus Felipe**

## 🗄️ Banco de Dados

Baixe o banco de dados MariaDB nesse link **https://mariadb.com/docs/release-notes/latest-releases**


Execute o script abaixo no MySQL/MariaDB (via phpMyAdmin ou terminal):

CREATE DATABASE IF NOT EXISTS loja_eletronicos;

USE loja_eletronicos;

CREATE TABLE marcas (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE categorias (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE produtos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT DEFAULT NULL,
    preco DECIMAL(10,2) NOT NULL,
    imagem_url VARCHAR(100) DEFAULT NULL,
    categoria_id INT(11) DEFAULT NULL,
    marca_id INT(11) DEFAULT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY fk_produto_categoria (categoria_id),
    KEY fk_produtos_marcas (marca_id),
    CONSTRAINT fk_produto_categoria
        FOREIGN KEY (categoria_id)
        REFERENCES categorias(id)
        ON DELETE SET NULL,
    CONSTRAINT fk_produtos_marcas
        FOREIGN KEY (marca_id)
        REFERENCES marcas(id)
        ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

## ⚙️ Como Executar o Projeto

1. Instale o **XAMPP** em sua máquina  
2. Inicie os serviços **Apache** 
3. Instale o banco de dados MariaDB e execute o script SQL.
4. preencha o password database.php com a mesma senha do user root do MariaDB
5. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/loja_eletronicos.git
