<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
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
        Comparison Operators
    </h1>
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
                <td>$a == $b</td>
                <td>Equal</td>
                <td>TRUE if $a is equal to $b</td>
            </tr>
            <tr>
                <td>$a === $b</td>
                <td>Identical</td>
                <td>TRUE if $a is equal to $b, AND they're all <br>
                    of the same type ie number, string, boolean etc
                </td>
            </tr>
            <tr>
                <td>$a != $b</td>
                <td>Not Equal</td>
                <td>TRUE if $a is not equal to $b</td>
            </tr>
            <tr>
                <td>$a <> $b</td>
                <td>Not Equal</td>
                <td>TRUE if $a is not equal to $b</td>
            </tr>
            <tr>
                <td>$a !== $b</td>
                <td>Not Equal</td>
                <td>TRUE if $a is not equal to $b or they're <br>
                    not of the same type
                </td>
            </tr>
            <tr>
                <td>$a < $b</td>
                <td>Less than</td>
                <td>TRUE if $a is strictly less than $b</td>
            </tr>
            <tr>
                <td>$a > $b</td>
                <td>Greater than</td>
                <td>TRUE if $a is strictly greater than $b</td>
            </tr>
            <tr>
                <td>$a <= $b</td>
                <td>Less than or equal to</td>
                <td>TRUE if $a is strictly less or equal to than $b</td>
            </tr>
            <tr>
                <td>$a >= $b</td>
                <td>Greater than or equal to</td>
                <td>TRUE if $a is strictly greater than or equal to $b</td>
            </tr>
            <!-- and so on... -->
        </tbody>
    </table>
</body>

</html>