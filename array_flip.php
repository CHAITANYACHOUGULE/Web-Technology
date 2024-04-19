<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$fruits = array("apple", "banana", "cherry");

$flipped = array_flip($fruits);

echo "Flipped Array: ";

foreach ($flipped as $key => $value) {

echo "[$key => $value] ";

}

?>
</body>
</html>