<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8);

$chunks = array_chunk($numbers, 3);

echo "Chunks of Array: ";

foreach ($chunks as $chunk) {

echo "[" . implode(", ", $chunk) . "] ";

}

?>
</body>
</html>