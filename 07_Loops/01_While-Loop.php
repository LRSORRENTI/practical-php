<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP While Loops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            color: #444;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        .code {
            background-color: #282c34;
            color: #61dafb;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-family: 'Courier New', Courier, monospace;
            overflow-x: auto;
            margin-bottom: 20px;
        }

        .code p {
            margin: 0;
            line-height: 1.5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PHP While Loops</h1>
        <p>In PHP, <strong>while</strong> loops are used to repeatedly execute a block of code as long as a specified
            condition is true.</p>
        <p>They are especially useful when you do not know beforehand how many times the loop should run.</p>

        <h2>Syntax:</h2>
        <div class="code">
            <p>while (condition) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// Code to execute<br>
                }</p>
        </div>

        <h2>Example:</h2>
        <p>The following example starts with a number 10 and increments it by 1 until it reaches 20:</p>
        <div class="code">
            <p>
                // Declare starting number:<br>
                $startingNum = 10;<br><br>
                // While loop:<br>
                while ($startingNum <= 20) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo $startingNum;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;br&gt;';<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$startingNum += 1;<br>
                    }
            </p>
        </div>

        <h2>Output:</h2>
        <div class="code">
            <?php
            $startingNum = 10;
            while ($startingNum <= 20) {
                echo $startingNum . "<br>";
                $startingNum += 1;
            }
            ?>
        </div>
    </div>
</body>

</html>