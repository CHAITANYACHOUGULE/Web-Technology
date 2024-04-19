<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cards = array("A", "2", "3", "4", "5");

shuffle($cards);

echo "Shuffled Cards: ";

foreach ($cards as $card) {

echo $card . " ";

}

?>
</body>
</html>