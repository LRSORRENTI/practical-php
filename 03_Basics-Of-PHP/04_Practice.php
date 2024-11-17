<html>
<?php $name = "Luke" ?>

<head>
    <title><?php echo $name ?> PHP webpage</title>
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
    date_default_timezone_set("America/Chicago");
    $today = date('F j Y');
    // two ways to define a constant below
    $this_year = date("Y");
    $birth_year = 1992;
    $current_age = ($this_year - $birth_year);
    // First way:
    define("NAME", "LUKE");
    define("FAVECOLOR", "LimeGreeen");
    // Second way: 
    const PI = 3.14;
    $age = 32;
    print ("<div class='main-div'>
    <p>Today's Date: $today</p><br>
    <p>My Name: " . NAME . "</p><br>
    <p>My Favorite Color: " . FAVECOLOR . "</p><br>
    <p>My Age: $age</p><br>
    <p>Current age $current_age </p> <br>
    </div>")
        ?>
    <small>&copy <?php echo $this_year ?> - <?php echo $name ?></small>
</body>

</html>