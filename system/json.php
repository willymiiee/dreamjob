<?php
$string = file_get_contents("question.json");
// $string = '{"foo": "bar", "cool": "attr"}';
$result = json_decode($string, true);
 
// Result: object(stdClass)#1 (2) { ["foo"]=> string(3) "bar" ["cool"]=> string(4) "attr" }
var_dump($result);
 
// echo $string;

print_r($result);
// echo $result["questions"];

// echo $result->question;
?>