<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Do/While Loops</title>
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
        <h1>PHP Do/While Loops</h1>
        <p>
            A <strong>do/while</strong> loop in PHP is used to execute a block of code at least once,
            and then repeatedly as long as the condition evaluates to true.
        </p>
        <p>
            The key difference between a <strong>do/while</strong> loop and a <strong>while</strong> loop
            is that the condition is evaluated after the code block is executed, ensuring the block runs at least once.
        </p>

        <h2>Syntax:</h2>
        <div class="code">
            <p>
                do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// Code to execute<br>
                } while (condition);
            </p>
        </div>

        <h2>Example:</h2>
        <p>
            The following example starts with 1 and increments by 1, printing numbers up to 5:
        </p>
        <div class="code">
            <p>
                $number = 1;<br><br>
                do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $number;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;br&gt;';<br>
                &nbsp;&nbsp;&nbsp;&nbsp;$number++;<br>
                } while ($number <= 5); </p>
        </div>

        <h2>Output:</h2>
        <div class="code">
            <?php
            $number = 1;
            do {
                echo $number . "<br>";
                $number++;
            } while ($number <= 5);
            ?>
        </div>

        <h2>Example with False Condition:</h2>
        <p>
            Here’s an example where the condition starts as false. Notice how the code block is executed once before the
            loop ends:
        </p>
        <div class="code">
            <p>
                $number = 10;<br><br>
                do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $number;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;br&gt;';<br>
                } while ($number < 5); </p>
        </div>

        <h2>Output:</h2>
        <div class="code">
            <?php
            $number = 10;
            do {
                echo $number . "<br>";
            } while ($number < 5);
            ?>
        </div>

        <h2>Explanation:</h2>
        <ul>
            <li><strong>Initial Execution:</strong> The block of code inside the `do` statement runs before the
                condition is evaluated.</li>
            <li><strong>Condition Evaluation:</strong> After the code block runs, the `while` condition determines
                whether the loop continues.</li>
            <li><strong>Use Case:</strong> Useful when the code block needs to run at least once, regardless of the
                condition.</li>
        </ul>
    </div>
</body>

</html>