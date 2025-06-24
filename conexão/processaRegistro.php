<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "root", "", "projetobaska");
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        header("Location: ../Registrar.php?erro=usuario");
        exit;
    }

    $sql = "INSERT INTO usuarios (nome, sobrenome, usuario, senha) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $sobrenome, $usuario, $senha);
    if ($stmt->execute()) {
        header("Location: ../Login.php?registrado=1");
        exit;
    } else {
        header("Location: ../Registrar.php?erro=1");
        exit;
    }
}
?>