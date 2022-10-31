<?php

// This exercise is from: 
// https://alexwebdevelop.com/php-password-hashing/

// Include the database connection script. 
include 'pdo.php';

// Login status: false = not authenticated, true = authenticated. 
$login = FALSE;

// Email from the login form. 
if (isset($_POST['email'])) { 
  $email = $_POST['email'];
} else { 
  $email = 'nothing@hereyet.com';
}

// Password from the login form.
if (isset($_POST['password'])) { 
  $password = $_POST['password'];
} else { 
  $password = 'superdupersecretpassword';
}

// Remember to validate $username and $password.

// Look for the username in the database.
$query = 'SELECT * FROM users WHERE (email = :email)';

// Values array for PDO.
$values = [':email' => $email];

// Execute the query 
try {
  $res = $pdo->prepare($query);
  $res->execute($values);
} catch (PDOException $e) {
  // Query error.
  echo 'Query error.';
  die();
}

$row = $res->fetch(PDO::FETCH_ASSOC);

// If there is a result, check if the password matches using password_verify(). 
if (is_array($row)) {
  if (password_verify($password, $row['password'])) {
    // The password is correct.
    $login = TRUE;
  }
}

function login_status()
{
  global $login;

  if ($login === TRUE) {
    echo '<h1>You are logged in</h1>';
  } else {
    echo '<h1>Sorry, you are not logged in</h1>';
  }
}
?>

<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="max-width: 750px;">
  <div class="row">
    <div class="card col-12" style="margin: 10px;">
      <!-- style="margin: 10px;" | style="width: 18rem;" -->
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">Login to share!</h5>
        <p class="card-text">You must be logged in to share something on Shareboard.</p>
        <form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>">
          <div class="form-group">
            <label>Email Address</label>
            <input type="text" name="email" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" />
          </div>
          <input class="btn btn-primary" name="submit" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </div>
  <?php login_status(); ?>
  </div>
</body>

</html>