<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counting Words</title>
</head>
<body>
<?php

$output;
function countWords($str){
    $words = str_word_count($str, 1);
    $occurence = array_count_values($words);
    print_r($occurence);
}

countWords("It rained on his lousy tombstone, and it rained on the grass on his stomach. It rained all over the place.");



?>



</body>
</html>