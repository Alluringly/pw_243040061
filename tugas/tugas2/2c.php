<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizki</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            color: black;
            background-color: yellow;
            border: 2px solid black;
            text-align: center;
        }
        </style>
</head>
<body>
    <table>
        <?php
        $n = 10;
        for ($i = $n; $i >= 1; $i--) {
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
</body>
</html>