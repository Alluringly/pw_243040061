<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizki</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ul>
        <?php
        $hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

        foreach ($hardware as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ul>
        <?php
        array_push($hardware, "Card Reader", "Modem");

        sort($hardware);

        foreach ($hardware as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</body>
</html>