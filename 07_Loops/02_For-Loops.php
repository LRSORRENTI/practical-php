<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Loops</title>
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
        <h1>PHP For Loops</h1>
        <p>
            In PHP, a <strong>for</strong> loop is used to execute a block of code a specific number of times.
            This is ideal when you know in advance how many iterations are required.
        </p>

        <h2>Syntax:</h2>
        <div class="code">
            <p>
                for (initialization; condition; increment) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// Code to execute<br>
                }
            </p>
        </div>

        <h2>Example:</h2>
        <p>
            The following example starts with 1 and increments by 1, printing numbers up to 10:
        </p>
        <div class="code">
            <p>
                // For loop:<br>
                for ($i = 1; $i <= 10; $i++) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo $i;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;br&gt;';<br>
                    }
            </p>
        </div>

        <h2>Output:</h2>
        <div class="code">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo $i . "<br>";
            }
            ?>
        </div>

        <h2>Explanation:</h2>
        <ul>
            <li><strong>Initialization:</strong> `$i = 1;` sets the starting value of the loop counter.</li>
            <li><strong>Condition:</strong> `$i <= 10;` ensures the loop runs as long as `$i` is less than or equal to
                    10.</li>
            <li><strong>Increment:</strong> `$i++` increases the value of `$i` by 1 after each iteration.</li>
        </ul>
    </div>
    <?php
    for ($i = 0; $i < 101; $i++) {
        echo $i;
        echo '<br>';
    }

    ?>
</body>

</html>