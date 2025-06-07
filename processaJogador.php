<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetobaska";

// Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$NOME_DOS_JOGADORES = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$datanascimento = $_POST['dataNascimento'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$posicao = $_POST['posicao'];

// Corrigido: passando as variáveis nos campos certos
$sql = "INSERT INTO jogadores (
    NOME_DOS_JOGADORES, 
    SOBRENOME, 
    DATANASCIMENTO, 
    ALTURA, 
    PESO, 
    POSICAO
) VALUES (
    '$NOME_DOS_JOGADORES', 
    '$sobrenome', 
    '$datanascimento', 
    '$altura', 
    '$peso', 
    '$posicao'
)";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Jogador cadastrado com sucesso!'); window.location.href='CadastrarJogador.php';</script>";
} else {
    echo "<script>alert('Erro: " . $conn->error . "');</script>";
}

$conn->close();
?>