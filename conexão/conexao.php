<?php
// Parâmetros de conexão
$host = 'localhost';
$dbname = 'projetobaska';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

try {
    // String DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    // Opções para a conexão PDO
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Retorna resultados como arrays associativos
        PDO::ATTR_EMULATE_PREPARES => false, // Desativa a emulação de prepared statements
    ];

    // Criação da conexão
    $conn = new PDO($dsn, $username, $password, $options);

} catch (PDOException $e) {
    // Tratamento de erro na conexão
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>