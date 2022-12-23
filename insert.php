<?php
include 'config.php';

  $nama_umkm = $_POST['nama_umkm'];
  $alamat = $_POST['alamat'];
  $komoditas_unggulan = $_POST['komoditas_unggulan'];
  $material = $_POST['material'];
  $kapasitas_produksi = $_POST['kapasitas_produksi'];
  $satuan_produksi = $_POST['satuan_produksi'];
  $problem = $_POST['problem'];


$data="INSERT INTO data_umkm SET nama_umkm='$nama_umkm',alamat='$alamat',komoditas_unggulan='$komoditas_unggulan', material='$material', kapasitas_produksi='$kapasitas_produksi', satuan_produksi='$satuan_produksi', problem='$problem'";
mysqli_query($koneksi, $data);


header( "location:informasitambahan.php");

?>