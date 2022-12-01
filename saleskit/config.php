<?php
$koneksi =mysqli_connect("localhost","root","","saleskit_db");


//cek
if (mysqli_connect_errno()){
   echo "Koneksi database gagal : ". mysqli_connect_error();
 }
else
{
    echo "";
}
?>