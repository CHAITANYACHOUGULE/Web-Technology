<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$filledArray = array_fill(0, 10, "kaliya");

echo "Filled Array: ";

foreach ($filledArray as $item) {

echo $item . " ";

}

?>
</body>
</html>