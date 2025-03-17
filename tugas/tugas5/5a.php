<?php
$mahasiswa = [
    [
        "nama" => "Rizki Anugerah",
        "nrp" => "243040061",
        "email" => "rizkianugerah@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Alvis Rafiffawaz",
        "nrp" => "243040046",
        "email" => "muhammadalvis@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rizki Agustian Maulana",
        "nrp" => "243040048",
        "email" => "rizkiagustian@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rezky Rizqullah",
        "nrp" => "243040037",
        "email" => "rezkyrizqullah@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fauzan Muhammad Luthfi",
        "nrp" => "243040043",
        "email" => "fauzanluthfi@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Nugraha Putra Juliansyah",
        "nrp" => "243040036",
        "email" => "nugrahaputra@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Nazriel Bintang",
        "nrp" => "243040026",
        "email" => "nazrielbintang@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Halim Suryana",
        "nrp" => "243040051",
        "email" => "halimsuryana@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Raja Saut Sihaloho",
        "nrp" => "243040039",
        "email" => "rajasaut@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rian Hery Juniarto",
        "nrp" => "243040049",
        "email" => "rianhery@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizki</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li> 
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>           
        </ul>
    <?php endforeach; ?>
    
</body>
</html>