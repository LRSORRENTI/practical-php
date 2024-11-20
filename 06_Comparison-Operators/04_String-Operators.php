<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operators</title>
</head>

<body>
    <style>
        .code {
            background-color: #333;
            color: aqua;
            padding: 20px;
            max-width: 300px;
        }
    </style>
    <h1>Concatenation String Operators</h1>
    <div class="code">
        <code>
        $a = "Hello";
        <br>
        $b = $a . "World";
        <br>
        echo $b;
        <br>
        // The '.' is the concat operator, <br> // to join together strings <br>
        // HelloWorld
     </code>
    </div>
    <h2>You can also use '.=' which appends a value onto the first</h2>
    <br>
    <div class="code">
        <code>
        $a = "Hello";
        <br>
        $a .= "World"
        <br>
        echo $a;
        <br>
        // The '.' is the concat operator, <br> // to join together strings <br>
        // HelloWorld
     </code>
    </div>
    <?php
    $a = "Hello";
    $b = $a . "World";

    echo '<br>', $b;
    ?>
</body>

</html>