<?php
try {
    $pdo = new PDO('mysql:host=db;dbname=career_explorer', 'root', 'my$qlp@ssworD33!');
    echo 'Connection successful!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
