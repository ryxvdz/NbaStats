<?php if (isset($_GET['registrado']) && $_GET['registrado'] == 1): ?>
<script>
    window.onload = function() {
        alert('Registrado com sucesso! Agora faça login.');
    }
</script>
<?php endif; ?>

<?php
$erroMsg = '';
if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 'senha') {
        $erroMsg = 'Senha incorreta!';
    } elseif ($_GET['erro'] == 'usuario') {
        $erroMsg = 'Usuário não encontrado!';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - NBA Stats</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if ($erroMsg): ?>
            <div style="color: #fff; background: #c0392b; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align:center;">
                <?php echo $erroMsg; ?>
            </div>
        <?php endif; ?>
        <form action="conexão/processaLogin.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn">Entrar</button>
        </form>
        <p style="text-align:center;margin-top:10px;">
            Não tem conta? <a href="Registrar.php">Registre-se</a>
        </p>
    </div>
</body>
</html>