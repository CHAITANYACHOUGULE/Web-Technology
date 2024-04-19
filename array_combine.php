<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$keys = array("a", "b", "c");

$values = array(1, 2, 3);

$combined = array_combine($keys, $values);

echo "Combined Array: ";

foreach ($combined as $key => $value) {

echo "[$key => $value] ";

}

?>
</body>
</html>