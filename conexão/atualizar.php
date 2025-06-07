<?php

require_once 'conexao.php';

$id = $_GET['id'] ?? null;
$usuario = null;
$mensagem_erro = '';

try {
    if ($id === null) {
        $mensagem_erro = "ID do usuário não especificado.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            $mensagem_erro = "Usuário não encontrado.";
        }
    }
} catch (PDOException $e) {
    $mensagem_erro = "Erro ao buscar usuário para deletar: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($mensagem_erro)) {
    try {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        $mensagem_erro = "Erro ao deletar usuário: " . $e->getMessage();
    }
}

?>