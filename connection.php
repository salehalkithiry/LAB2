<?php
$host = "localhost"; // Change to your database host
$dbname = "IAP"; // Change to your database name
$user = "root"; // Change to your database username
$password = "12345"; // Change to your database password

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
