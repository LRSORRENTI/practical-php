<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
    <h1>
        Logical Operators
    </h1>
    <p>
        Logical operators are useful for checking the
        differences between values, they inlude and, or, not and
        a few others
    </p>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Example</th>
                <th>Name</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr class="active-row">
                <td>$a and $b</td>
                <td>And</td>
                <td>TRUE if both $a and $b resolve to TRUE</td>
            </tr>
            <tr>
                <td>$a && $b</td>
                <td>And</td>
                <td>TRUE if both $a and $b resolve to TRUE</td>
            </tr>
            <tr>
                <td>$a or $b</td>
                <td>Or</td>
                <td>TRUE if $a or $b resolve to TRUE
                </td>
            </tr>
            <tr>
                <td>! $a</td>
                <td>Not</td>
                <td>TRUE if $a does not resolve to TRUE ie. $a resolves to FALSE</td>
            </tr>
            <tr>
                <td>$a || $b</td>
                <td>Or</td>
                <td>TRUE if $a or $b resolves to TRUE
                </td>
            </tr>
            <!-- and so on... -->
        </tbody>
    </table>
    <h2>Example</h2>
    <?php
    $username = 'Guest123';
    $pw = 'pw123';

    if ($username == 'Guest123' && $pw = 'pw123') {
        // user name and password are corrct 
        echo 'Username and pw are correct';
    } else {
        echo 'Username or password is incorrect';
    }
    ?>
</body>

</html>