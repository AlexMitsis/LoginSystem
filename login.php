<?php
session_start();
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

$sql = "SELECT password FROM users2 WHERE username = '$username'";

$result = mysqli_query($conn, $sql);

if(!empty($_POST['username']) and !empty($_POST['password']))
    if ($result === false)
        echo "Error: " . mysqli_error($conn);
    else if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            echo "<p style='color:green;'>" . 'this is the correct password!' . "</p>";
        }
        else
            echo 'Incorrect password';
    } 
    else if (isset($_POST['username']))
        echo ($username . ' user not found');
    

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div id="container">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <fieldset>
          <input type="text" name="username" placeholder=" " id="first-name" minlength="5" required />
          <label for="first-name" name="username" id="username" required>Username</label>
        </fieldset>
        <fieldset>
          <input type="password" name="password" placeholder=" " id="password" minlength="5" required />
          <label for="password" name="password" id="password" required>Password</label>
        </fieldset>
        <button type="submit" class="button-30">Login</button>
      </form>
      <h3>Don't have an account yet?</h3>
      <a href="register.php">Register</a>
    </div>
  </body>
</html>
