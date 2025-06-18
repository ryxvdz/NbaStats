<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogador</title>
    <link rel="stylesheet" href="css/EditarJogador.css">
</head>
<body>
    <h1>Editar Jogador</h1>
    <?php
    // ...código de conexão...
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $conn = new mysqli("localhost", "root", "", "projetobaska");
        $sql = "SELECT * FROM jogadores WHERE ID_JOGADORES = $id";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            $jogador = $result->fetch_assoc();
        } else {
            echo "Jogador não encontrado!";
            exit;
        }
        $conn->close();
    } else {
        echo "ID do jogador não informado!";
        exit;
    }
    ?>
   
        <form action="conexão/AtualizarJogador.php?id=<?php echo $jogador['ID_JOGADORES']; ?>" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $jogador['NOME_DOS_JOGADORES']; ?>" required><br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" value="<?php echo $jogador['SOBRENOME']; ?>" required><br>
        <label>Data de Nascimento:</label>
        <input type="date" name="datanascimento" value="<?php echo $jogador['DATANASCIMENTO']; ?>" required><br>
        <label>Altura (cm):</label>
        <input type="number" name="altura" value="<?php echo $jogador['ALTURA']; ?>" required><br>
        <label>Peso (kg):</label>
        <input type="number" name="peso" value="<?php echo $jogador['PESO']; ?>" required><br>
        <label>Posição:</label>
        <div class="form-group">
        <label for="posicao">Posição Principal:</label>
<select id="posicao" name="posicao" required>
    <option value="">Selecione a posição</option>
    <option value="Armador" <?php echo ($jogador['POSICAO'] === 'Armador') ? 'selected' : ''; ?>>Armador (PG)</option>
    <option value="Ala-Armador" <?php echo ($jogador['POSICAO'] === 'Ala-Armador') ? 'selected' : ''; ?>>Ala-Armador (SG)</option>
    <option value="Ala" <?php echo ($jogador['POSICAO'] === 'Ala') ? 'selected' : ''; ?>>Ala (SF)</option>
    <option value="Ala-Pivo" <?php echo ($jogador['POSICAO'] === 'Ala-Pivo') ? 'selected' : ''; ?>>Ala-Pivô (PF)</option>
    <option value="Pivo" <?php echo ($jogador['POSICAO'] === 'Pivo') ? 'selected' : ''; ?>>Pivô (Center)</option>
</select>
            </div><br>
        <label>Título Individual:</label>
        <select name="titulo" required>
            <option value="">Selecione um título</option>
            <?php
            // Conexão com o banco de dados
            $conn = new mysqli("localhost", "root", "", "projetobaska");
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Busca os títulos no banco de dados
            $titulos = $conn->query("SELECT ID_TITULOS, TITULOS_INDIVIDUAIS FROM titulos");
            while ($row = $titulos->fetch_assoc()) {
                // Define o título selecionado com base no jogador atual
                $selected = ($row['TITULOS_INDIVIDUAIS'] === $jogador['TITULO_NOME']) ? 'selected' : '';
                echo "<option value='{$row['TITULOS_INDIVIDUAIS']}' $selected>{$row['TITULOS_INDIVIDUAIS']}</option>";
            }
            $conn->close();
            ?>
        </select><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>