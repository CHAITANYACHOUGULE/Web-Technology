<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$arr1 = array("a", "b", "c");

$arr2 = array("b", "c", "d");

$intersection = array_intersect($arr1, $arr2);

echo "Array Intersection: ";

foreach ($intersection as $item) {

echo $item . " ";

}

?>
</body>
</html>