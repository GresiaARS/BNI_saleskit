<?php 
include 'config.php';
?>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<section class="vh-100" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black" style="margin-top: 5%;">
<div>
        <div style="margin-left: 2%;">
         <a href ="datamarket.php" class="btn-2" style="text-decoration: none; color: #FF6600;"> <  Back</a> </div>
    
        <div style="margin-left: 20%; margin-top: -25px;">
        <h3 >JELAJAHI PASAR EKSPOR</h3><h8> Eksplor permintaan pasar disini.</h8>
       </div>
</div>
</div></div></div>


<?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  // echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 <div class="container">
  <div class="row">
    <div class="col">
  <br><br>    
disini harusnya piechar


    </div>

    <div class="col">
    	  <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from data_market where komoditi_1 like '%".$cari."%'");       
  }else{
    $data = mysqli_query($koneksi,"select * from data_market");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
   <div class="card mb-3" style="max-width: 540px; background-color: #F8F8F8"><a href="form.php" style="text-decoration: none">
  <div class="row no-gutters">
    <div class="col-md-4">
       <img style=" margin: 5px;object-fit: cover;object-position: center;" src="<?php echo $d['flag'] ?>"  class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body"style="color: black;">
        <h5 class="card-title" ><?php echo $d['negara'] ?></h5>
                      <p style="text-decoration: none"class="card-text"><b>Komoditi   :</b><?php echo $d['komoditi_1'] ?>
                       <p style="text-decoration: none"class="card-text"><b>Jumlah Import (kg)   :</b><?php echo $d['jumlah_1'] ?></p>
      </div>
    </div>
  </div>
</a></div>
 <?php
    }
    ?>
  </div>
</div>
</div>
</section>