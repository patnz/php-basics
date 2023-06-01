<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- TEST FORM 1 -->
<!-- <form action="index.php" method="post">
    <label>quantity: </label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  </form> -->

<!-- TEST FORM 2 -->
  <!-- <form action="index.php" method="post">
  <label for="">x: </label>
    <input type="text" name="x"><br>
    <label for="">y: </label>
    <input type="text" name="y"><br>
    <label for="">z: </label>
    <input type="text" name="z"><br>
    <input type="submit" value="calculate!">
  </form> -->


  

</body>
</html>

<?php

// ASSOCIATIVE ARRAYS <-------------

$capitals = array("USA" => "Washington DC",
                  "Japan" => "Kyoto",
                  "South Korea" => "Seoul",
                  "India" => "New Delhi");

// $capitals["USA"] = "new value";
// $capitals["new key"] = "new value";
// array_pop($capitals);
// array_shift($capitals);
// array_flip($capitals);
// array_reverse($capitals);

// ACCESSING KEYS <-------------

$keys = array_keys($capitals);
foreach($keys as $key){
  echo"{$key}<br>";
}

// ACCCESSING VALUES <-------------

$values = array_values($capitals);
foreach($values as $value){
  echo"{$value}<br>";
}

// ACCESSING KEYS AND VALUES <-------------

foreach($capitals as $key => $value){
  echo"The capital of {$key} is {$value}<br>";
}
 
// TEST FORM 1 USES:

  // $item = 'pizza';
  // $price = 5.99;
  // $quantity = $_POST["quantity"];
  // $total = $quantity * $price;
  // echo"You have ordered {$quantity} x {$item}s <br>";
  // echo"Your total is: \${$total}";

// TEST FORM 2 USES:

  // $x = $_POST["x"];
  // $y = $_POST["y"];
  // $total = null;
  // $total = abs($x);
  // $total = round($x);
  // $total = floor($x);
  // $total = ceil($x);
  // $total = pow($x, $y);
  // $total = sqrt($x);
  // $total = max($x, $y, $z);
  // $total = min($x, $y, $z);
  // $total = pi();
  // $total = rand(1, 21);
  // echo $total;


?>