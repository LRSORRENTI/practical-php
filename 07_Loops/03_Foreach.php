<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Foreach Loops</title>
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
        <h1>PHP Foreach Loops</h1>
        <p>
            In PHP, a <strong>foreach</strong> loop is used to iterate over arrays or objects.
            It is specifically designed to work with collections of data and is easier to use than a standard
            <strong>for</strong> loop when dealing with arrays.
        </p>

        <h2>Syntax:</h2>
        <div class="code">
            <p>
                foreach ($array as $value) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// Code to execute<br>
                }
            </p>
        </div>

        <h2>Example:</h2>
        <p>The following example iterates over an array of fruits and prints each item:</p>
        <div class="code">
            <p>
                $fruits = ["Apple", "Banana", "Cherry"];<br><br>
                foreach ($fruits as $fruit) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $fruit;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;br&gt;';<br>
                }
            </p>
        </div>

        <h2>Output:</h2>
        <div class="code">
            <?php
            $fruits = ["Apple", "Banana", "Cherry"];
            foreach ($fruits as $fruit) {
                echo $fruit . "<br>";
            }
            ?>
        </div>

        <h2>Example with Key-Value Pairs:</h2>
        <p>
            The following example iterates over an associative array and prints both the key and the value:
        </p>
        <div class="code">
            <p>
                $person = ["Name" => "John", "Age" => 30, "City" => "New York"];<br><br>
                foreach ($person as $key => $value) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $key . ": " . $value;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;br&gt;';<br>
                }
            </p>
        </div>

        <h2>Output:</h2>
        <div class="code">
            <?php
            $person = ["Name" => "John", "Age" => 30, "City" => "New York"];
            foreach ($person as $key => $value) {
                echo $key . ": " . $value . "<br>";
            }
            ?>
        </div>

        <h2>Explanation:</h2>
        <ul>
            <li><strong>Basic Foreach:</strong> Loops through each value in an array.</li>
            <li><strong>Key-Value Pair:</strong> Accesses both the key and the value of each item in an associative
                array.</li>
            <li><strong>Clean Syntax:</strong> No need to manually manage loop counters or array indexes.</li>
        </ul>
    </div>
</body>

</html>