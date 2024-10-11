<?php

$konek = mysqli_connect("localhost", "root", "dbvibration");

$sql = mysql_query($konek, "select * from tb_sensor order by id desc");

$data = mysql_fetch_array($sql);
$konsentrasi = $data['konsentrasi'];

if( $konsentrasi == "" ) $konsentrasi = 0;

echo $konsentrasi;
?>