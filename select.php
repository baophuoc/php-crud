<?php
include_once 'mysql.php';

$sql = "select * from categories";
// execute a query
$stmt = $pdo->query($sql);

// fetch all rows
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// display the categorie name
foreach ($categories as $category) {
    echo $category['id'] . ' - ' .$category['name'] . ' - ' . $category['description'] . '<br>';
}