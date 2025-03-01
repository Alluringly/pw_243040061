<?php
function hitungLuasLingkaran($jarijari) {
    return pi() * pow($jarijari, 2);
}

function hitungKelilingLingkaran($jarijari) {
    return 2 * pi() * $jarijari;
}

$jarijari = 10;
echo "Menghitung Luas Lingkaran<br><br>
Jari-jari = $jarijari cm.<br>
Luas lingkaran = " . hitungLuasLingkaran($jarijari) . "\n cm².<hr>";

echo "Menghitung Keliling Lingkaran<br><br>
Jari-jari = $jarijari cm.<br>
Keliling lingkaran = " . hitungKelilingLingkaran($jarijari) . "\n cm.";
?>