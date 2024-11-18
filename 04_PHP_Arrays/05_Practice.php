<?php
$people = array(
    // Name of person, type of person, hair style, hair color
    array("Carter", "Adult", "Buzz Cut", "Brown"),
    array("Rodriga", "Teenager", "Braids", "Black"),
    array("Giovanni", "Child", "Curly", "Blonde"),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><? echo $people[0][0] ?> from Canada</h2>
    <p><? echo $people[0][0] ?> is an <? echo $people[0][1] ?>, he sports a <? echo $people[0][2] ?> that is the color
        <? echo $people[0][3] ?>
    </p>
    <p><? echo $people[1][0] ?> is a <? echo $people[1][1] ?>, she sports <? echo $people[1][2] ?> that is the color
        <? echo $people[1][3] ?>
    </p>
    <p><? echo $people[2][0] ?> is an <? echo $people[2][1] ?>, he sports a <? echo $people[2][2] ?> hair that is the
        color
        <? echo $people[2][3] ?>
    </p>
</body>

</html>