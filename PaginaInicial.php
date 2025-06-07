<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegação - Exemplo</title>
    <link rel="stylesheet" href="navbar.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/PaginaInicial.css">
</head>
<body>

    <header class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">
                Seu Site
            </a>

            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="hamburger">
                <i class="fas fa-bars"></i>
            </label>

            <nav class="navbar-nav">
                <ul>
                    <li><a href="#">Jogadores</a></li>
                    <li><a href="CadastrarJogador.php">Cadastrar Jogadores</a></li>
                    <li><a href="#">Cadastrar Conferencia</a></li>
                  
                </ul>
            </nav>

            <div class="navbar-actions">
                <a href="#" class="btn btn-primary">League Pass</a>
                <a href="https://www.lojanba.com/?gad_source=1&gad_campaignid=938512033&gclid=CjwKCAjwo4rCBhAbEiwAxhJlCay62rU5L7UPk8errIDoaW4-8vJazlma-5oevfFBODys1ASFLmEMphoCfMUQAvD_BwE" class="btn">Loja</a>
                <a href="#" class="btn">Ingressos</a>
                <a href="#" class="btn"><i class="fas fa-ellipsis-h"></i></a> <a href="#" class="btn"><i class="fas fa-user"></i> Sign in</a>
            </div>
        </div>
    </header>

    <main style="padding-top: 80px; text-align: center;">
        <h1>Bem-vindo ao Seu Site!</h1>
        <p>Este é o conteúdo abaixo da sua barra de navegação.</p>
        <p>Você pode adicionar mais conteúdo aqui para testar o scroll.</p>
        <div