<?php

// Koneksi Function 
require 'function.php';

// Kode Auto
$select_kode = mysqli_query($c, "SELECT MAX(kode_pasien) as MAXkode FROM tbl_pasien");
$kode_data = mysqli_fetch_array($select_kode);

$kode = $kode_data['MAXkode'];
$nourut = (int) substr($kode, 2, 4);

$nourut++;
$char = "RM";
$tgl = date('Ymd');
$kode_auto = $char . $tgl . sprintf("%04s", $nourut);

echo $kode_auto;


?>