<?php
require_once 'RotaListar.php'; // Inclui a conexão com o banco de dados

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Obtém o ID do jogador a ser excluído

    // Executa a exclusão no banco de dados
    $sql = "DELETE FROM jogadores WHERE ID_JOGADORES = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Jogador excluído com sucesso!'); window.location.href='../ListarJogador.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir jogador.'); window.location.href='ListarJogador.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('ID inválido.'); window.location.href='ListarJogador.php';</script>";
}
?>