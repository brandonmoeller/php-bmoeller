<?php

// Include the database connection script. 
include 'config.php';

// The PDO object.  
// $pdo = NULL; // was getting an error in vscode on login.php for this being null. 

// Connection string, or "data source name".  
$dsn = 'mysql:host=' . $host . ';dbname=' . $schema;

// Connection inside a try/catch block.  
try {
  // PDO object creation.  
  $pdo = new PDO($dsn, $user,  $passwd);

  // Enable exceptions on errors.  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  // If there is an error, an exception is thrown.  
  echo 'Database connection failed.';
  die();
}