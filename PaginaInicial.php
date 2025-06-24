<?php
session_start();
$nomeCompleto = isset($_SESSION['nome']) ? $_SESSION['nome'] : null;
$primeiroNome = $nomeCompleto ? explode(' ', trim($nomeCompleto))[0] : null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nba Stats</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/PaginaInicial.css">
</head>
<body>
    <body>
    <video autoplay loop muted playsinline id="bg-video">
        <source src="images/nbatrailer.mp4" type="video/mp4">
        Seu navegador não suporta vídeo em background.
    </video>

    <header class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">
                NBA Stats
            </a>

            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="hamburger">
                <i class="fas fa-bars"></i>
            </label>

            <nav class="navbar-nav">
                <ul>
                    <li><a href="ListarJogador.php">Jogadores</a></li>
                    <li><a href="CadastrarJogador.php">Cadastrar Jogadores</a></li>
                    <li><a href="https://www.nba.com/standings">Conferencias</a></li>
                  
                </ul>
            </nav>

            <div class="navbar-actions">
                <a href="https://www.nba.com/league-pass-purchase" class="btn btn-primary">League Pass</a>
                <a href="https://www.lojanba.com/?gad_source=1&gad_campaignid=938512033&gclid=CjwKCAjwo4rCBhAbEiwAxhJlCay62rU5L7UPk8errIDoaW4-8vJazlma-5oevfFBODys1ASFLmEMphoCfMUQAvD_BwE" class="btn">Loja</a>
                <a href="https://www.ticketmaster.com.br/event/nbahouse?utm_source=google-ads&utm_medium=cpc&utm_campaign=dojo_2025_nbab_2025_nba_0001_nbahouse_0001_gads_sit_cpc_na_4_na&utm_content=lancamento_cs_gads-gads-sea_sea_lin_pro-sav-seg014-termosgenricoseinstitucionais_geo_mult_18-55_w16apr&utm_term=lancamento_inch_nba-house-2025_na_na_na_sea_dim021_cta017_web_all&gad_source=1&gad_campaignid=22448207946&gclid=CjwKCAjwo4rCBhAbEiwAxhJlCRheIVpJI_N7_voFPLSK2zp9Chbp7U67t2sUisv6B0yP5xSe6NTU3BoCVvMQAvD_BwE" class="btn">Ingressos</a>
                <a href="#" class="btn"><i class="fas fa-ellipsis-h"></i></a>
                <?php if ($primeiroNome): ?>
    <span class="btn" style="cursor:default;">
        <i class="fas fa-user"></i>
        <?php echo htmlspecialchars($primeiroNome); ?>
    </span>
<?php else: ?>
    <a href="Login.php" class="btn">
        <i class="fas fa-user"></i>
        Sign in
    </a>
<?php endif; ?>
                <?php if ($primeiroNome): ?>
            <a href="conexão/Logout.php" class="btn">
                <i class="fas fa-sign-out-alt"></i> Sair
            </a>
             <?php endif; ?>
            </div>
        </div>
    </header>

    <main class="h1site">
        <h1>Bem-vindo ao NBA Stats!</h1>
        <p></p>
        <p></p>