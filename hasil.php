<?php
// Menangkap Value form berdasarkan unique name & simpan ke dalam variable
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
$nilai = 0;

foreach ($skill as $data ) {
    switch ($data) {
        case 'html':
        case 'css' :
            $nilai += 10;
            break;
            default:
                # code...
                break;
               
    }
}
foreach ($skill as $data ) {
    switch ($data) {
        case 'js' :
        case 'rwd' :
        
            $nilai += 20;
            break;
            default:
                # code...
                break;
    }
}
foreach ($skill as $data ) {
    switch ($data) {
        case 'php' :
        case 'python' :
        
            $nilai += 30;
            break;
            default:
                # code...
                break;
    }
}
foreach ($skill as $data ) {
    switch ($data) {
        case 'java' :
        
            $nilai += 50;
            break;
            default:
                # code...
                break;
    }
}

if ($nilai >=100){
    $grade = "Sangat Baik";
}
elseif ($nilai >=60){
    $grade = "Baik";
}
elseif ($nilai >=40){
    $grade = "Cukup";
}
elseif ($nilai >=10){
    $grade = "Kurang";
}
else {
    $grade = "Tidak Memadai";
}
// tampilkan value ke dalam  web browser
echo "<table style='border: 1px solid #ccc; width: 50%; margin: 10% auto; padding: 20px 20px; border-radius:8px; background-color:#EEE4B1'>";
echo "<tr><td colspan='2'><h3 style='font-size: 24px;'>Data Yang Dikirim :</h3></td></tr>";
echo "<tr><td>Nim</td><td>:</td><td><strong>$nim</strong></td></tr>";
echo "<tr><td>Nama</td><td>:</td><td><strong>$nama</strong></td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>:</td><td><strong>$jk</strong></td></tr>";
echo "<tr><td>Program Studi</td><td>:</td><td><strong>$prodi</strong></td></tr>";
echo "<tr><td>Skill</td><td>:</td><td><strong>";
foreach ($skill as $data) {
    echo strtoupper($data) . ", ";
}
echo "</strong></td></tr>";
echo "<tr><td>Domisili</td><td>:</td><td><strong>$domisili</strong></td></tr>";
echo "<tr><td>Email</td><td>:</td><td><strong>$email</strong></td></tr>";
echo "<tr><td>Nilai</td><td>:</td><td><strong>$nilai</strong></td></tr>";
echo "<tr><td>Predikat</td><td>:</td><td><strong>$grade</strong></td></tr>";
echo "</table>";