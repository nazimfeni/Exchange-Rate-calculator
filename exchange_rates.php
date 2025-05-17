<?php
header('Content-Type: application/json');

// Database credentials
$host = 'localhost';
$db   = 'exchange_db';     // <-- Replace with your DB name
$user = 'root';     // <-- Replace with your DB user
$pass = 'root';     // <-- Replace with your DB password

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
     $stmt = $pdo->query("SELECT code, flag_url FROM currencies");
    $stmt = $pdo->query("SELECT currency_code, rate FROM exchange_rates");
    $rates = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $rates[strtolower($row['currency_code'])] = (float)$row['rate'];
    }

    echo json_encode($rates);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
