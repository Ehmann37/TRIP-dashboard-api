<?php
$servername = "localhost";
$username = "s24103754_trip-dashboard-api";
$password = "dashboard-api";
$dbname = "s24103754_trip-dashboard-api";

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Connection successful
    // echo "Connected successfully";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$_ENV['JWT_SECRET'] = 'dashboard-api-secret';