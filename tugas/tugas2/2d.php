<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizki</title>
    <style>
        .bnw {
            width: 100px;
            height: 100px;
            display: grid;
            grid-template-columns: repeat(5, 50px);
            grid-template-rows: repeat (5, 50px);
        }

        .box {
            width: 50px;
            height: 50px;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
        </style>
</head>
<body>
    <div class="bnw">
        <?php
        for ($row = 0; $row < 5; $row++) {
            for ($col = 0; $col < 5; $col++) {
                $class = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<div class='box $class'></div>";
            }
        }
    ?>
    </div>
</body>
</html>