<html>

<head>
    <title>My first PHP webpage</title>
</head>

<body>
    <style>
        p {
            color: #CFFF04;
            background-color: #333;
            width: fit-content;
            padding: 14px;
            border-radius: 10px;
            font-weight: 500;
            /* text-shadow: 1px 1px 1px #FFF; */
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>
    <?php
    define(constant_name: "TITLE", value: "Defining Constants");
    print ("Constants in php are denoted with full caps <br> so 
<p>define('TITLE', 'Defining Constants')</p> is a constant variable, it should never change <br>");
    echo (TITLE);
    ?>
</body>

</html>