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
    $reversed = array_reverse($fruits);
    echo "Reversed Fruits: ";
    foreach ($reversed as $fruit) {
        echo $fruit . " ";
    }

?>
</body>
</html>