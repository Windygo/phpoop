<?php

$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'pdo';

//Set DSN -- Data source name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//Create a PDO instance

$pdo = new PDO($dsn, $user, $password);
//Set the default fetch mode to object instead of array
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$status = 'admin'; //look up name :paramters vs. positional ?paramters
$sql = 'SELECT * FROM users WHERE status = :status'; //using named parameters statements in pdo to prevent sql injection
$stmt = $pdo->prepare($sql);
$stmt->execute(['status' => $status]);

// $users = $stmt->fetchAll(); //user fetchAll when fetching more than one -- fetch as array
// foreach ($users as $user)
//   echo $user['name'] .' | '. $user['email'].' | '. $user['status'] . '<br>';

// $users = $stmt->fetchAll(); //user fetchAll when fetching more than one -- fetch as object
// foreach ($users as $user)
//   echo $user->name .' | '. $user->email .' | '. $user->status . '<br>';


// Insert Data - Assume this data came from a form and can not be trusted...
$name = 'Keren Williams';
$email = 'k.williams@yahoo.com';
$status = 'admin';

$sql = 'INSERT INTO users (name, email, status) VALUES (:name, :email, :status)';
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
  'name' => $name,  
  'email' => $email,
  'status' => $status
  )
);


