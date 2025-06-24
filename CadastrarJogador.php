<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Login.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogador de Basquete</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/CadastrarJogador.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <a href="PaginaInicial.php" class="navbar-brand">
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
                <a href="#" class="btn"><i class="fas fa-user"></i> </a>
            </div>
        </div>
    </header>
    <div class="container">
        <h1>Cadastre seu Jogador!</h1>
        <form action="conexão/processaJogador.php" method="post">
            <div class="two-columns">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" required>
                </div>
            </div>

            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento" required>
            </div>

            <div class="two-columns">
                <div class="form-group">
                    <label for="altura">Altura (cm):</label>
                    <input type="number" id="altura" name="altura" min="100" max="250" required>
                </div>
                <div class="form-group">
                    <label for="peso">Peso (kg):</label>
                    <input type="number" id="peso" name="peso" step="0.1" min="30" max="200" required>
                </div>
            </div>

            <div class="form-group">
                <label for="posicao">Posição Principal:</label>
                <select id="posicao" name="posicao" required>
                    <option value="">Selecione a posição</option>
                    <option value="Armador">Armador (PG)</option>
                    <option value="Ala-Armador">Ala-Armador (SG)</option>
                    <option value="Ala">Ala (SF)</option>
                    <option value="Ala-Pivo">Ala-Pivô (PF)</option>
                    <option value="Pivo">Pivô (Center)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ID_TITULOS">Títulos Individuais:</label>
                <?php
                $conn = new mysqli("localhost", "root", "", "projetobaska");
                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }
                $titulos = $conn->query("SELECT ID_TITULOS, TITULOS_INDIVIDUAIS FROM titulos");
                ?>
                <select id="ID_TITULOS" name="ID_TITULOS" required>
                    <option value="">Selecione um título</option>
                    <?php while($row = $titulos->fetch_assoc()): ?>
                        <option value="<?php echo $row['ID_TITULOS']; ?>">
                            <?php echo $row['TITULOS_INDIVIDUAIS']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
                <?php $conn->close(); ?>
            </div>

            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>