<?php

$TITLETWO = 'ARRAYS PRACTICE';

$dogs = array('German Shepherd', 'Corgi', 'Border Collie')

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>

<body>
    <style>
        #main {
            display: flex;
            border: 2px solid red;
            margin-top: 2rem;
            margin-bottom: 0px;
            margin: auto;
            flex-direction: column;
            align-items: center;
            padding: 0px;
            text-align: left;
            max-width: 400px;
            gap: 5px;
        }

        h2 {
            border: 2px solid green;
            margin-bottom: 0px;
            padding-bottom: 10px;
        }

        p {
            border: 2px solid magenta;
            padding: 0px;
            margin: 0px;
            font-size: 2rem;
        }
    </style>
    <div id="main">
        <h2><?php
        echo $TITLETWO
            ?></h2>
        <p>Dog Breeds</p>
        <ul>
            <li><?php echo $dogs[0] ?></li>
            <li><?php echo $dogs[1] ?></li>
            <li><?php echo $dogs[2] ?></li>
        </ul>
    </div>
</body>

</html>