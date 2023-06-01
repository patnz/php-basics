<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h4>Enter a country from this list to find the capital:</h4>
  <h5>> Australia, New Zealand, Canada, Portugal.</h5>
  <form action="test.php" method="post">
    <label for="">Enter a country: </label>
    <input type="text" name="country">
    <input type="submit"><br>
  </form>
</body>
</html>
<?php

  $capitals = array('Australia' => 'Canberra',
                    'New Zealand' => 'Wellington',
                    'Canada' => 'Ontario',
                    'Portugal' => 'Lisbon');






  function format_each_word($str){
    $words = explode(' ', $str);
    $formattedWords = array();
    for ($i = 0; $i < count($words); $i++) {
      array_push($formattedWords, ucfirst(strtolower($words[$i])));
    }
    return implode(" ",$formattedWords);
  }

  
  $country_string = $_POST['country'];
  $country = format_each_word($country_string);


  $capital = $capitals[$country];
  echo"<br>";
  
  if ($capital) {
    echo"The capital of {$country} is {$capital}";
  } else echo"Sorry, \"{$country_string}\" is not on the list!";

?>