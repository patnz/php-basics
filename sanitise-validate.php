<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="sanitise-validate.php" method="post">
  <label for="">username: </label><br>
    <input type="text" name="username"><br>
    <label for="">age: </label><br>
    <input type="text" name="age"><br>
    <label for="">email: </label><br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="login"><br>
  </form>
</body>
</html>

<?php

  if (isset($_POST["username"])) {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


    if(empty($username) || empty($age) || empty($email)) {
      echo"You need to complete all the forms with correct formatting!<br>";
    } else  {echo"Hello '{$username}'.<br>";
            echo"You are {$age} years old.<br>";
            echo"Your email address is '{$email}'.<br>";};

    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    
    // echo"hello {$username}<br>";
    // echo"you are {$age} years old<br>";
    // echo"your email address is {$email}<br>";

    // if(empty($username)) {
    //   echo"Please enter a username.<br>";
    // } else
    //   echo"Hello {$username}.<br>";

    // if(empty($age)) {
    //   echo"That is not a valid age.<br>";
    // } else
    //   echo"you are {$age} years old.<br>";

    //   if(empty($email)) {
    //     echo"That is not a valid email.<br>";
    //   } else
    //     echo"your email address is {$email}<br>.";
  }

?>