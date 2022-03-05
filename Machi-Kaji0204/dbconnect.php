<?php
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
  ?>