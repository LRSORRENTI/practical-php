<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<style>
    body {
        background-color: #ECECEC;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        text-align: center;
        color: #000333;
        margin: 0;
    }


    .wrap {
        align-content: first baseline;
        width: 300px;
        border: 2px solid black;
        text-align: left;
        margin: auto;
        padding: 10px 20px 5px 20px;
        border-radius: 5px;
    }

    li {
        text-align: left;
        padding: 7px;
    }
</style>

<body>
    <div class="wrap">
        <h1>
            If statements
        </h1>
        <p>
            The point of using PHP is to create dynamic events, so that
            the website can show different elements based on user inputs,
            user conditions, or parameters you set
        </p>
        <ul>
            <li>
                If a user needs to login, they must type both
                the username and password, php can help handle the
                logic for verifying the validity of those fields,
                checking the fields with if, else and elseif statements
            </li>
            <li>
                PHP can check if an image the user uploads is too large,
                or if the file type is unsuppported
            </li>
        </ul>
        <p>The above are just two examples where PHP can assist in
            building dynamic websites
        </p>
        <?php
        $a = 12;
        $b = 10;
        $y_name = "Trevor";


        if ($a > $b) {
            echo "Yes $a is greater than $b";
        }
        ;
        ?>
    </div>

</body>

</html>