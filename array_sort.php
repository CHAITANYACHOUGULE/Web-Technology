<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$values = array("10", "2", "25", "7");

sort($values, SORT_NUMERIC);

foreach ($values as $value) {

echo $value . " ";

}

?>
</body>
</html>