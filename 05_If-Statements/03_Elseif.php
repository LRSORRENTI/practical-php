<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elseif Statement</title>
</head>

<body>
    <h1>Elseif</h1>
    <p>Elseif is used as the middle statement in most
        if conditionial checks, if, elseif, else
    </p>
    <?php
    $car1 = "Toyota";
    $car2 = "Honda";
    $car3 = "Subaru";
    if ($car1 == "Subaru") {
        echo "Subaru";
    } elseif ($car1 == "Honda") {
        echo "Honda";
    } else {
        echo "Toyota";
    }
    ;
    ?>
</body>

</html>