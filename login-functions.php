
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="functions.php" method="post">
    <label for="">username: </label>
    <input type="text" name="username"><br>
    <label for="">password: </label>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log in"><br>
  </form>
</body>
</html>

<?php

  // foreach($_POST as $key => $value){
  //   echo"{$key} = {$value} <br>";
  // }

  $usernames_and_passwords = array('pat123' => 'pat321',
                    'username123' => 'password123',
                    'username69' => 'password69',
                    'username420' => 'password420');


  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)) {
      echo"You didn't enter a username";
    }

    else if (isset($username) && empty($password)) {
      echo"You didn't enter a password";
    }

    else if (isset($username) && isset($password)) {
      if ($password === $usernames_and_passwords[$username]) {
        echo"Hello {$username}!";
      }
      else echo"That username and password is incorrect";
    }
  }




  // isset / empty functions <--------------------------------

  // isset() = returns TRUE if a variable is declared and not null
  // empty() = returns TRUE if a variable is not declared, false, null, ""
  
  // $username = true;
  // $username = "patsMyName";

  // $username2 = null;
  // $username2 = "";

  // function check_variable($var) {
  //   if (isset($username) == true) {
  //     return "This variable is set";
  //   } else return "This variable is not set";   
  // }

  // echo check_variable($username) . ", your username is set to \"{$username}\"";

?>