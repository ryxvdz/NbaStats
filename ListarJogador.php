<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jogadores Cadastrados</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/CadastrarJogador.css">
    <style>
        /* Adicione um estilo básico para a tabela */
        .container {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
                    <li><a href="ListarJogadores.php">Jogadores</a></li>
                    <li><a href="CadastrarJogador.php">Cadastrar Jogadores</a></li>
                    <li><a href="https://www.nba.com/standings">Conferencias</a></li>
                </ul>
            </nav>

            <div class="navbar-actions">
                <a href="https://www.nba.com/league-pass-purchase" class="btn btn-primary">League Pass</a>
                <a href="https://www.lojanba.com/?gad_source=1&gad_campaignid=938512033&gclid=CjwKCAjwo4rCBhAbEiwAxhJlCay62rU5L7UPk8errIDoaW4-8vJazlma-5oevfFBODys1ASFLnEMphoCfMUQAvD_BwE" class="btn">Loja</a>
                <a href="https://www.ticketmaster.com.br/event/nbahouse?utm_source=google-ads&utm_medium=cpc&utm_campaign=dojo_2025_nbab_2025_nba_0001_nbahouse_0001_gads_sit_cpc_na_4_na&utm_content=lancamento_cs_gads-gads-sea_sea_lin_pro-sav-seg014-termosgenricoseinstitucionais_geo_mult_18-55_w16apr&utm_term=lancamento_inch_nba-house-2025_na_na_na_sea_dim021_cta017_web_all&gad_source=1&gad_campaignid=22448207946&gclid=CjwKCAjwo4rCBhAbEiwAxhJlCRheIVpJI_N7_voFPLSK2zp9Chbp7U67t2sUisv6B0yP5xSe6NTU3BoCVvMQAvD_BwE" class="btn">Ingressos</a>
                <a href="#" class="btn"><i class="fas fa-ellipsis-h"></i></a>
                <a href="#" class="btn"><i class="fas fa-user"></i> Sign in</a>
            </div>
        </div>
    </header>

    <div class="container">
        <h1>Jogadores Cadastrados</h1>

        <?php
        // Inclui o arquivo de conexão com o banco de dados
        require_once 'conexão/conexãoListar.php'; //'require_once' para garantir que o arquivo seja incluído apenas uma vez

        // Consulta SQL para selecionar todos os jogadores
        $sql = "SELECT ID_JOGADORES, NOME_DOS_JOGADORES, SOBRENOME, DATANASCIMENTO, ALTURA, PESO, POSICAO, TITULO_NOME FROM jogadores";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Sobrenome</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th>Altura (cm)</th>";
            echo "<th>Peso (kg)</th>";
            echo "<th>Posição</th>";
            echo "<th>Título Individual</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            // Saída de dados de cada linha
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID_JOGADORES"] . "</td>";
                echo "<td>" . $row["NOME_DOS_JOGADORES"] . "</td>";
                echo "<td>" . $row["SOBRENOME"] . "</td>";
                echo "<td>" . $row["DATANASCIMENTO"] . "</td>";
                echo "<td>" . $row["ALTURA"] . "</td>";
                echo "<td>" . $row["PESO"] . "</td>";
                echo "<td>" . $row["POSICAO"] . "</td>";
                echo "<td>" . $row["TITULO_NOME"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Nenhum jogador cadastrado.</p>";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </div>
</body>
</html>