<?php
// Conexão com o banco de dados (Nossas credenciais)
$host = "localhost";
$username = "usuario";
$password = "senha";
$database = "gamers_dream_tech";

$conn = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// tabelas para os produtos
$sql = "CREATE TABLE IF NOT EXISTS PCs_Gamers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela de PCs Gamers criada com sucesso.";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS Teclados Gamers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela de Teclados Gamers Criada com sucesso.";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS Headsets Gamers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela de Headsets Gamers criada com sucesso.";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS Mouses Gamers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela de Mouses Gamers criada com sucesso.";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}


// Lembrar de fechar a conexão com o banco de dados em sala.
$conn->close();
?>
