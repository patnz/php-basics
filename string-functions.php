<?php

$my_string = "Hey There!";
$status = "learning php";

echo strtolower($my_string) . "<br>";
echo strtoupper($my_string) . "<br>";
echo trim($my_string) . "<br>";
echo str_pad($status, 15, '!') . "<br>";
echo str_replace('Hey', 'Hello', $my_string) . "<br>";
echo strrev($my_string) . "<br>";
echo str_shuffle($my_string) . "<br>";
echo strcmp($my_string, 'Hey There!') . "<br>";
echo strlen($status) . "<br>";
echo strpos($status, 'g') . "<br>";
echo substr($status, 0, 4) . "<br>";


?>