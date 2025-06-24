<?php
session_start();
$conn = new mysqli("localhost", "root", "", "projetobaska");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $row = $result->fetch_assoc()) {
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nome'] = $row['nome']; 
        header("Location: ../PaginaInicial.php");
        exit;
    }
}

header("Location: login.php?erro=1");
exit;
?>