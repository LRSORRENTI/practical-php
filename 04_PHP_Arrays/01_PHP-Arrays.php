<!-- PHP Arrays -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    To declare an array in php, use the following
    syntax:
    <?php
    $cookies = array('Sugar', 'Chocolate Chip', 'Cinnamon');
    print ('<br>');
    echo 'Cookies at index 0:';
    print ('<br>');
    echo ($cookies[0]);
    print ("<div>
            <h1>Cookie Types</h1>
            <ul>
            <li> ' - $cookies[0] - '</li>
            <li> ' - $cookies[1] - '</li>
            <li> ' - $cookies[2] - '</li>
            </ul>
            </div>
    ");
    ?>
    <style>
        body {
            padding: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        h1 {
            margin-bottom: 0px;
            text-decoration: underline;
        }
    </style>
</body>

</html>