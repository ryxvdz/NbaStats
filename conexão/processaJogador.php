<?php

// Exemplo de uso no processaJogador.php
require_once 'methods.php';
$dao = new conexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [
        'nome' => $_POST['nome'],
        'sobrenome' => $_POST['sobrenome'],
        'dataNascimento' => $_POST['dataNascimento'],
        'altura' => $_POST['altura'],
        'peso' => $_POST['peso'],
        'posicao' => $_POST['posicao'],
        'ID_TITULOS' => $_POST['ID_TITULOS']
    ];
    if ($dao->cadastrarJogador($dados)) {
        echo "<script>alert('Jogador cadastrado com sucesso!'); window.location.href='../CadastrarJogador.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar jogador!');</script>";
    }
}
?>