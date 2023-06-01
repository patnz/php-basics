<?php

$my_string = "Hey There! How are you?";
$status = "learning php";

echo strtolower($my_string) . "<br>";
echo strtoupper($my_string) . "<br>";
echo trim($my_string) . "<br>";
echo str_pad($status, 25, '!') . "<br>";
echo str_replace('Hey', 'Hello', $my_string) . "<br>";
echo strrev($my_string) . "<br>";
echo str_shuffle($my_string) . "<br>";
echo strcmp($my_string, 'Hey There!') . "<br>";
echo strlen($status) . "<br>";
echo strpos($status, 'g') . "<br>";
echo substr($status, 0, 4) . "<br>";

$string_array = explode(' ', $my_string);

foreach($string_array as $word) {
  echo $word . " ";
}

$string_array_imploded = implode(' ', $string_array);


?>