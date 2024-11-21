<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators</title>
</head>

<body>
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .code {
            background-color: #333;
            color: aqua;
            padding: 20px;
            max-width: 300px;
        }
    </style>
    <h1>
        PHP Assignment Operators
    </h1>
    <p>
        Assignment operators are used to assign values to variables in PHP. These operators include basic assignment
        (`=`) as well as compound assignments like `+=`, `-=`, and others.
    </p>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Example</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr class="active-row">
                <td>$a = $b</td>
                <td>Basic Assignment</td>
                <td>Assigns the value of $b to $a</td>
            </tr>
            <tr>
                <td>$a += $b</td>
                <td>Addition Assignment</td>
                <td>Adds $b to $a and assigns the result to $a</td>
            </tr>
            <tr>
                <td>$a -= $b</td>
                <td>Subtraction Assignment</td>
                <td>Subtracts $b from $a and assigns the result to $a</td>
            </tr>
            <tr>
                <td>$a *= $b</td>
                <td>Multiplication Assignment</td>
                <td>Multiplies $a by $b and assigns the result to $a</td>
            </tr>
            <tr>
                <td>$a /= $b</td>
                <td>Division Assignment</td>
                <td>Divides $a by $b and assigns the result to $a</td>
            </tr>
            <tr>
                <td>$a %= $b</td>
                <td>Modulus Assignment</td>
                <td>Calculates the remainder of $a divided by $b and assigns it to $a</td>
            </tr>
            <tr>
                <td>$a .= $b</td>
                <td>Concatenation Assignment</td>
                <td>Appends $b to $a (string concatenation) and assigns the result to $a</td>
            </tr>
            <tr>
                <td>$a ??= $b</td>
                <td>Null Coalescing Assignment</td>
                <td>Assigns $b to $a only if $a is null</td>
            </tr>
        </tbody>
    </table>
    <h2>Practice</h2>
    <p>Basic Assignment</p>
    <?php
    $age1 = 22;
    $one = 1;
    echo ' <div class="code"> $age1 = 22; <br>
            $one = 1;  <br> 
            $age1 += $one <br>
            // 23
            </div>';
    ?>
</body>

</html>