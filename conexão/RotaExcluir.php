<?php
// Exemplo de uso no ExcluirJogador.php
require_once 'methods.php';
$dao = new conexao();

if (isset($_GET['id'])) {
    if ($dao->excluirJogador(intval($_GET['id']))) {
        echo "<script>alert('Jogador excluído com sucesso!'); window.location.href='../ListarJogador.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir jogador.'); window.location.href='ListarJogador.php';</script>";
    }
}