<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to functions</title>
</head>

<body>
    <h1>Functions</h1>
    <?php
    $dinner = ["Meat", "Potatoes", "Beans", "Rice"];
    sort($dinner);
    foreach ($dinner as $ingredient) {
        echo "$ingredient <br>";
    }
    ;
    ?>
</body>

</html>