<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$nickname = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'psbodb');

// REGISTER USER
if (isset($_POST['reg_user']))
{
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $nickname = mysqli_real_escape_string($db, $_POST['nickname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($nickname)) { array_push($errors, "Nickname is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email/or nickname
  $user_check_query = "SELECT * FROM accounts WHERE name='$username' OR email='$email' OR character_name='$nickname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user)
  { // if user exists
    if ($user['name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['character_name'] === $nickname) {
      array_push($errors, "nickname already exists");
    }
  }

  if(!$user)
  {
    if (strlen($password) < 4)//password more then 4 characters
    {
      array_push($errors, "Password must be more then 4 characters");
    }
    if(strlen($username) < 3)
    {
      array_push($errors, "Username must be more then 3 characters");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Email is invalid");
    }
  }

  function createSalt()
  {
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 10);//return string 10 characters
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0)
  {
    $salt = createSalt();
    $password = hash('sha256', $password);
    $password = $salt.$password;
    $password = hash('sha256', $password);
    $password = $password.$salt;

  	$query = "INSERT INTO accounts (name, email, character_name, passwd ,salt)
  			  VALUES('$username', '$email', '$nickname', '$password', '$salt')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now logged in successfully. in this page you have access to download snowboard online from this page at the left corner, if you have any question please contact us. we wishing you much pleasure (gamesnow tr)";
  	header('location: index.php');

  }
}

// ...

// LOGIN USER
if (isset($_POST['login_user']))
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username))
  {
  	array_push($errors, "Username is required");
  }
  if (empty($password))
  {
  	array_push($errors, "Password is required");
  }

  $query = "SELECT * FROM accounts WHERE name='$username' LIMIT 1";
  $result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);

  if ($user)
  { // if user exists
    if ($user['name'] != $username)
    {
      array_push($errors, "Wrong username or password");
    }
  }

  if (count($errors) == 0)
  {
    $pass = $user['passwd'];
    $pass = substr($pass, 1, 64);
    $salt = $user['salt'];

    $password = hash('sha256', $password);
    $password = $salt.$password;
    $password = hash('sha256', $password);
    $password = $password.$salt;

    if ($password == $user['passwd'])
    {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in successfully. in this page you have access to download snowboard online from this page at the left corner, if you have any question please contact us. we wishing you much pleasure (gamesnow team)";
  	  header('location: index.php');
  	}
    else
    {
  		array_push($errors, "Wrong username or password");
  	}
  }
}

?>
