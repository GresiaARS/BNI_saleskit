<?php 
include 'config.php';
?>
<html>
<head>

  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<div style="margin-left: 2%; margin-top: 5%;">
         <a href ="datamarket.php" class="btn-2" style="text-decoration: none; color: #FF6600;"> <  Back</a> 
</div>  

<div style="margin-left:30%">
        <h3 >Informasi Umum</h3><h8> Pertama, kami perlu mengetahui lebih banyak tentang perusahaan Anda</h8><br><br>
</div>


  <div class="container">
    <div class="row">
    <!--   <div  style="margin-top: 5%;"> -->
         
       <form action="" method="get" style="margin-left: 25%;width: 45% ;background-color: #F8F8F8; padding: 30px; border-radius: 15px; box-shadow: 0px 5px 5px 5px #D9D9D9;">
          
            <div class="form-group">
           <label for="email">Nama UMKM:</label>
           <input required type="text" name="cari" style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control" id="email" placeholder="Masukkan Nama UMKM Anda">
          </div>
<br>
          <div class="form-group">
           <label for="email">Alamat:</label>
           <input style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control" id="email" placeholder="Masukkan Alamat UMKM Anda">
          </div>
<br>
          <div class="form-group">
           <label for="email">Komoditas:</label>
           <input style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control" id="email" placeholder="Masukkan Komoditas Unggulan Anda">
          </div>
<br>
          <div class="form-group">
           <label for="email">Material/Bahan:</label>
           <input style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control" id="email" placeholder="Kode Produksi Komoditas">
          </div>
<br>
          <div class="form-group">
           <label for="email">Produksi per Tahun:</label>
           <input style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control" id="email" placeholder="Kode Produksi Komoditas">
          </div>
<br>
          <div class="form-group">
           <label for="email">Detail Permasalahan:</label>
           <textarea rows="5" style="border-radius: 15px; border-color: #676F73;"  class="form-control" id="email" placeholder="Tuliskan Permasalahan UMKM yang Sedang Anda Alami"></textarea>
          </div>
<br>
            <div class="pt-1 mb-4" style="text-align: right;">
              <input type="submit" value="Next" class="btn" style="background-color: white; width: 25%; border-color: #FF6600; border-radius: 15px;" type="button"></input>
            </div>
          </form>
       </div></div>