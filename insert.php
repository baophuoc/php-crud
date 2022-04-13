<?php
include_once 'mysql.php';

$sql = "INSERT INTO categories (id, name, description) VALUES (NULL, :name, :description);";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':description', $description);

$name = 'ABC';
$description = 'asdlld';

$stmt->execute();
?>
