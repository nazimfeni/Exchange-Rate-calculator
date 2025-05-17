<?php
header('Content-Type: application/json');

// DB connection info (adjust to your setup)
$host = 'localhost';
$db   = 'exchange_db';
$user = 'root';
$pass = 'root';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("SELECT code, flag_url FROM currencies");

    $currencies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($currencies);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
