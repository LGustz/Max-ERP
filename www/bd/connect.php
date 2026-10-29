<?php
$arquivo_db = __DIR__ . '/meu_banco.db'; // Substitua pelo nome exato do seu arquivo de banco

try {
    // O PDO conecta diretamente no arquivo local do SQLite
    $pdo = new PDO("sqlite:" . $arquivo_db);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die("Erro ao conectar com o arquivo do banco de dados: " . $e->getMessage());
}

?>