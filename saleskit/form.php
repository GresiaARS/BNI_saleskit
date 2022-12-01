<?php 
include 'config.php';
?>
<html>
<head>

  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<center>
<div>
<img style="width: 25%; margin-top: 2%;" src="asset/keterangan.png">
</div></center>


<div style="margin-left: 2%;">
         <a href ="datamarket.php" class="btn-2" style="text-decoration: none; color: #FF6600;"> <  Back</a> 
</div>  

<div style="margin-left:30%">
        <h3 >Informasi Umum</h3><h8> Pertama, kami perlu mengetahui lebih banyak tentang perusahaan Anda</h8><br><br>
</div>


  <div class="container">
    <div class="row">
    
         
       <form action="insert.php" id="contact" method="post" style="margin-left: 25%;width: 45% ;background-color: #F8F8F8; padding: 30px; border-radius: 15px; box-shadow: 0px 5px 5px 5px #D9D9D9;">
          
            <div class="form-group">
           <label>Nama UMKM:</label>
           <input type="text" name="nama_umkm" id="nama_umkm" style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control"  placeholder="Masukkan Nama UMKM Anda" required>
          </div>
<br>
          <div class="form-group">
           <label >Alamat:</label>
           <input name="alamat" id="alamat" style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control"  placeholder="Masukkan Alamat UMKM Anda" required>
          </div>
<br>
          <div class="form-group">
           <label >Komoditas:</label>
           <input name="komoditas_unggulan" id="komoditas_unggulan" style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control"  placeholder="Masukkan Komoditas Unggulan Anda" required>
          </div>
<br>
          <div class="form-group">
           <label >Material/Bahan:</label>
           <input name="material" id="material" style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control"  placeholder="Kode Produksi Komoditas" required>
          </div>
<br>
          <div class="row">
          <div class="col-sm-8">
           <label>Produksi per Tahun:</label>
           <input name="kapasitas_produksi" id="kapasitas_produksi" style="border-radius: 15px; border-color: #676F73;" type="float" class="form-control"  placeholder="Masukkan Banyak Produksi Per Tahun" required>
          </div>
          <div class="col-sm-4">
           <label>Satuan:</label>
           <input name="satuan_produksi" id="satuan_produksi" style="border-radius: 15px; border-color: #676F73;" type="text" class="form-control"  placeholder="Masukkan Satuan" required>
          </div>
        </div>
<br>
          <div class="form-group">
           <label >Detail Permasalahan:</label>
           <textarea name="problem" id="problem" rows="5" style="border-radius: 15px; border-color: #676F73;"  class="form-control"  placeholder="Tuliskan Permasalahan UMKM yang Sedang Anda Alami"></textarea>
          </div>
<br>
            <div class="pt-1 mb-4" style="text-align: right;">
              <input type="submit" id="form-submit" class="main-button " style="background-color: white; width: 25%; border-color: #FF6600; border-radius: 15px;" type="button"></input>
            </div>
          </form>
       </div></div>