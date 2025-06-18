<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $datanascimento = $_POST['datanascimento'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $posicao = $_POST['posicao'];
    $titulo = $_POST['titulo'];

    // Conecta ao banco
    $conn = new mysqli("localhost", "root", "", "projetobaska");
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Atualiza o jogador
    $sql = "UPDATE jogadores SET 
        NOME_DOS_JOGADORES=?, 
        SOBRENOME=?, 
        DATANASCIMENTO=?, 
        ALTURA=?, 
        PESO=?, 
        POSICAO=?, 
        TITULO_NOME=?
        WHERE ID_JOGADORES=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssissi", $nome, $sobrenome, $datanascimento, $altura, $peso, $posicao, $titulo, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Jogador atualizado com sucesso!'); window.location.href='../ListarJogador.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar jogador!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "ID do jogador não informado!";
}
?>