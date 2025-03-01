<?php
$i = "10";
// while
// 1. Nilai Awal  / Initial Value
// 2. Kondisi Terminasi / kapan looping berhenti
// 3. Increment / Decrement
while($i >= 1) {
    echo "Hello World $i x <br>";
    $i = $i - 1;
}

echo "<hr>";

for($i >= 1; $i <= 10; $i++) {
    echo "Hello World $i x <br>";
}
