<?php
  spl_autoload_register();
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  try {
    $db = new PDO("mysql:host=$servername;dbname=genre", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>