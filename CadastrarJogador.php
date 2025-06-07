<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogador de Basquete</title>
    <link rel="stylesheet" href="css/CadastrarJogador.css">
</head>
<body>
    <div class="container">
        <h1>Cadastre seu Jogador!</h1>
        <form action="processaJogador.php" method="post">
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

            <select id = "posicao" name="posicao" required>
                    
                </select>
            </div>

             <div class="form-group">
                <label for="titulos">Titulos Individuais:</label>
                <select id="titulos" name="titulos" required>
                    <option value="">Selecione a posição</option>
                    <option value="MVP_Finals">MVP Finals</option>
                    <option value="MVP_Temp-Regular">MVP Temp Regular</option>
                    <option value="MPV_Conferencia-Oeste">MPV Conferencia Oeste</option>
                    <option value="MPV_Conferencia-Leste">MPV Conferencia Leste</option>
                    <option value="MPV_Denfensivo">MPV Defensivo do Ano</option>
                    <option value="Sexto_Homem">Sexto Homem</option>
                    <option value="Novato_Anual">Rookie the Year</option>
                   
                    

            <select id = "titulos" name="titulos" required>
                   
                
                </select>
            </div>

            <button type="submit" class="btn">Cadastrar</button>
        </form>


