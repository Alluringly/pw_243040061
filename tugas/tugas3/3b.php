<?php
function urutanAngka($jumlah) {
    $angka = 1;
    for ($i = 1; $i <= $jumlah; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $angka . " ";
            $angka++;
        }
        echo "<br>";
    }
}
urutanAngka(5)
?>