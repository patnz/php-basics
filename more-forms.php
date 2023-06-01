<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="more-forms.php" method="post">
  <label for="">Pick the colour(s) you like:</label><br><br>
  <input type="checkbox" name="colours[]" value="red">Red</input><br>
  <input type="checkbox" name="colours[]" value="yellow">Yellow</input><br>
  <input type="checkbox" name="colours[]" value="green">Green</input><br>
  <input type="checkbox" name="colours[]" value="blue">Blue</input><br><br>
  <input type="submit" name="submit">
  </form><br>
</body>
</html>

<?php

  $colours = $_POST['colours'];



  function post_colours($array) {
    // echo count($array);
    echo "You like ";
    foreach($array as $index => $colour){
      if ($index == 0) {echo $colour;}
      else if ($index < (count($array) - 1)) {
        echo ", " . $colour;
      }
      else echo " and " . $colour;
    }
    echo ".";
  }

  post_colours($colours);


  

?>