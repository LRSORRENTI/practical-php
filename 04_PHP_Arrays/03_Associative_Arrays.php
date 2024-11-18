<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <?php
    echo $car['brand'];
    ?>
    <p>My car is a <?= "{$car['brand']} {$car['model']}" ?> - <?= "{$car['year']}" ?></p>
</body>

</html>