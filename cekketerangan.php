<?php

$konek = mysqli_connect("localhost", "root", "dbvibration");

$sql = mysql_query($konek, "select * from tb_sensor order by id desc");

$data = mysql_fetch_array($sql);
$keterangan = $data['keterangan'];

if( $keterangan == "" ) $keterangan = "tidak ada";

echo $keterangan;
?>