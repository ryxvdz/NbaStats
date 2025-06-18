
<?php

class conexao {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "projetobaska");
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function buscarTitulo($id_titulos) {
        $stmt = $this->conn->prepare("SELECT TITULOS_INDIVIDUAIS FROM titulos WHERE ID_TITULOS = ?");
        $stmt->bind_param("i", $id_titulos);
        $stmt->execute();
        $result = $stmt->get_result();
        $titulo_nome = '';
        if ($result && $result->num_rows > 0) {
            $titulo_row = $result->fetch_assoc();
            $titulo_nome = $titulo_row['TITULOS_INDIVIDUAIS'];
        }
        $stmt->close();
        return $titulo_nome;
    }

    public function cadastrarJogador($dados) {
        $titulo_nome = $this->buscarTitulo($dados['ID_TITULOS']);
        $sql = "INSERT INTO jogadores (
            NOME_DOS_JOGADORES, SOBRENOME, DATANASCIMENTO, ALTURA, PESO, POSICAO, ID_TITULOS, TITULO_NOME
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssssssis",
            $dados['nome'],
            $dados['sobrenome'],
            $dados['dataNascimento'],
            $dados['altura'],
            $dados['peso'],
            $dados['posicao'],
            $dados['ID_TITULOS'],
            $titulo_nome
        );
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    public function excluirJogador($id) {
        $sql = "DELETE FROM jogadores WHERE ID_JOGADORES = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>