<?php

<<<<<<< HEAD
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>OOP PHP Foundations</title>

</head>
<body>
<div class="container">
  <div class="jumbotron mt-lg">
    <h1>PHP OOP Foundations</h1>
    <ul>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/2_3.php" target="_blank">CLASSES, PROPERITES & METHODS</a></li>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/2_4.php" target="_blank">CONSTRUCTOR & DESTRUCTOR</a></li>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/2_5.php" target="_blank">ACCESS MODIFIERS, GETTERS & SETTERS</a></li>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/2_6.php" target="_blank">CLASS INHERITANCE</a></li>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/2_7.php" target="_blank">STATIC METHODS & PROPERTIES</a></li>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/2_8.php" target="_blank">INTERFACES</a></li>
    <li><a href="https://github.com/Windygo/phpoop/blob/master/pdo.php" target="_blank">PDO</a></li>
    </ul>
  </div>
  
</div>


</body>
</html>
=======
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


>>>>>>> 848fa3e74d4722b43c82b2018c3bfb30628794eb
