<?php

//Establish connection to Database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=m4_test',
  'root','root');
//See errors ---------------------------- EXCEPTIONS ARE ON FOR DEVELOPMENT
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
