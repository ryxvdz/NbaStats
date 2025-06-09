<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetobaska";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$ID_TITULOS = isset($_POST['ID_TITULOS']) ? $_POST['ID_TITULOS'] : null;
if (empty($ID_TITULOS)) {
    echo "<script>alert('Selecione um título válido!'); window.location.href='CadastrarJogador.php';</script>";
    $conn->close();
    exit;
}


$titulo_nome = '';
$titulo_query = $conn->prepare("SELECT TITULOS_INDIVIDUAIS FROM titulos WHERE ID_TITULOS = ?");
$titulo_query->bind_param("i", $ID_TITULOS);
$titulo_query->execute();
$result = $titulo_query->get_result();
if ($result && $result->num_rows > 0) {
    $titulo_row = $result->fetch_assoc();
    $titulo_nome = $titulo_row['TITULOS_INDIVIDUAIS'];
}
$titulo_query->close();

$NOME_DOS_JOGADORES = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$datanascimento = $_POST['dataNascimento'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$posicao = $_POST['posicao'];


$sql = "INSERT INTO jogadores (
    NOME_DOS_JOGADORES, 
    SOBRENOME, 
    DATANASCIMENTO, 
    ALTURA, 
    PESO, 
    POSICAO,
    ID_TITULOS,
    TITULO_NOME
) VALUES (
    '$NOME_DOS_JOGADORES', 
    '$sobrenome', 
    '$datanascimento', 
    '$altura', 
    '$peso', 
    '$posicao',
    '$ID_TITULOS',
    '$titulo_nome'
)";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Jogador cadastrado com sucesso!'); window.location.href='CadastrarJogador.php';</script>";
} else {
    echo "<script>alert('Erro: " . $conn->error . "');</script>";
}

$conn->close();
?>