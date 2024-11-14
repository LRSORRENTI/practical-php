<html>

<head>
    <title>My first PHP webpage</title>
</head>

<body>
    <style>
        .main-div {
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
            max-width: 300px;
            background-color: lightslategray;
            flex-direction: column;
            border-radius: 10px;

        }

        p {
            text-align: center;
            min-width: 15rem;
            color: #CFFF04;
            background-color: #333;
            width: fit-content;
            padding: 14px;
            border-radius: 10px;
            font-weight: 500;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>
    <?php
    $date = "11-14-2024";
    define("NAME", "LUKE");
    define("FAVECOLOR", "LimeGreeen");
    $age = 29;
    print ("<div class='main-div'>
    <p>Today's Date: $date</p><br>
    <p>My Name: " . NAME . "</p><br>
    <p>My Favorite Color: " . FAVECOLOR . "</p><br>
    <p>My Age: $age</p><br>
    </div>")
        ?>
</body>

</html>