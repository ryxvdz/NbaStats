<?php>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registrar - NBA Stats</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
    <div class="container">
        <h1>Registrar</h1>
        <form action="conexão/processaRegistro.php" method="post">
        <p style="text-align:center;">Preencha seu Nome e Sobrenome para criar sua conta.</p>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn">Registrar</button>
        </form>
        <p style="text-align:center;margin-top:10px;">
            Já tem conta? <a href="Login.php">Faça login</a>
        </p>
    </div>
</body>
</html>