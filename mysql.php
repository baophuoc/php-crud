<?php
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'eshop');

try {
  $pdo = new PDO("mysql:host=localhost;dbname=" . DATABASE, USER, PASS);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>