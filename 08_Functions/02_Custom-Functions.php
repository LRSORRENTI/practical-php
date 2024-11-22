<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Functions</title>
</head>

<body>
    <h1>Custom Functions</h1>
    <?php
    function customFunction()
    {
        echo "<h2>Hello world</h2>";
    }
    ;

    customFunction();

    function surfsUp($location)
    {
        echo "We're surfing in $location! <br>";
    }
    ;

    surfsUp("Malibu");
    surfsUp("Redondo Beach");
    surfsUp("Hawaii");

    function multiplyTogether($val1, $val2)
    {
        $product = $val1 * $val2;
        echo "The product of $val1 and $val2 is $product";
    }
    ;
    multiplyTogether(5, 5)
        ?>
</body>

</html>