<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = "John";

$age = 30;

$info = compact("name", "age");

echo "Info Array: ";

foreach ($info as $key => $value) {

echo "[$key => $value] ";

}

?>
</body>
</html>