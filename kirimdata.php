<?php

$konek = mysqli_connect("localhost", "root", "dbvibration");

$konsentrasi = $_GET['konsentrasi'];
$keterangan = $_GET['keterangan'];

mysql_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");


$simpan = mysqli_query($konek, "insert into tb_sensor(konsentrasi, keterangan)values('$konsentrasi', '$keterangan')");

if($simpan)
    echo "Berhasil dikirim";
else
    echo "Gagal Terkirim";

?>