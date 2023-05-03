<?php
//future updates: secure against SQL injections
//add a password strength checker
//add option to login with google
//make the usernames case-sensitive

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'usersdb';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

//get values from the form fields
$username = $_POST['username']?? null;
$password = $_POST['password']?? null;

//hash the given password
$hash = password_hash($password, PASSWORD_ARGON2ID);

//Insert the username and hashed password into the database
$sql = "INSERT INTO users2 (username, password)
        VALUES ('$username', '$hash')";

//if the user has chosen a username and password output the corresponding message
if(!empty($_POST['username']) and !empty($_POST['password']))
    // execute the query to register the user
    if (mysqli_query($conn, $sql)) {
        // check if the user was actually registered by counting the affected rows
        if (mysqli_affected_rows($conn) > 0)
            echo "<p style='color:green;'>" . 'User registered successfully' . "</p>";
        else
            echo "<p style='color:red;'>" . 'Error: User not registered' . "</p>";
        
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div id="container">
      <h1>Register</h1>
      <form action="register.php" method="post">
        <fieldset>
          <input type="text" name="username" placeholder=" " id="first-name" minlength="5" required />
          <label for="first-name" name="username" id="username" required>Username</label>
        </fieldset>
        <fieldset>
          <input type="password" name="password" placeholder=" " id="password" minlength="5" required />
          <label for="password" name="password" id="password" required>Password</label>
        </fieldset>
        <button type="submit" class="button-30">Register</button>
      </form>
      <h3>Have an account already?</h3>
      <a href="login.php">Login</a>
    </div>
  </body>
</html>