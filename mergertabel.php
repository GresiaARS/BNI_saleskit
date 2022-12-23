<?php 
include 'config.php';
?>
<html>
<head>
<style>
 html, body {
      max-width: 100%;
      max-height: 100%;
      overflow-x: hidden;
      }

      .paragraph {
      width: 150%;
      }
       
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>





<div class="container" style="margin-top: %;">
  <div class="row" style="height: 7.2%;"></div>
  <div class="row">
    <div class="col col-lg-2" style="margin-left:-6.8%">
       <a href ="indirectpinjaman.php" class="btn-2" style="text-decoration: none; color: #FF6600;"> <  Back</a> 
    </div>
    <div class="col" style="" >
      <h3 >Tabel Kerja Sama (Merger)</h3><h8> Kami akan membantu anda dalam mengajukan kerja sama dengan perusahaan yang berkaitan dengan komoditas anda</h8><br><br>
    </div>
    <div class="col col-lg-2" style="margin-right:-10%">
     <a href ="end.php" class="btn-2" style="text-decoration: none; color: #FF6600;"> Exit  ></a> 
    </div>
  </div>
</div>

<div class="container-md" style="width:50%;"> 
    <form class="form-inline" >
      <div style="" class="input-group" >
        <input type="text" class="form-control" style="width:490px; height: 41px;"  id="KataKunci" name="KataKunci" placeholder="Ketik nama komoditas utama dan tekan enter untuk mencari" required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
          <a href="mergertabel.php" class="btn btn-danger">Reset</a>
      </div>
    </form>  
</div>
<br>
<div class="container-md">
  <div class="row">
    <table class="table table-striped bordered" style="font-size: 12px;">
      <thead>
      <tr>
        <th>No</th>
        <th style="width:20%;">Kategori Komoditas Usaha</th>
        <th style="width:15%;">Nama Produk</th>
        <th>Brand</th>
        <th >Spesifikasi</th>
      </tr>
      </thead>  
      
      <tbody>
  <?php
        include "config.php";
        $page = (isset($_GET['page']))? (int) $_GET['page'] :1;
        $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

        $limit = 10;
        $limitStart = ($page - 1) * $limit;

        if($kolomKataKunci==""){
          $SqlQuery = mysqli_query($koneksi, "select * from merge_umkm limit $limitStart, $limit");
        }else{
          $SqlQuery = mysqli_query($koneksi, "select * from merge_umkm where kategori_komoditas_usaha like '%$kolomKataKunci%' limit $limitStart, $limit");
        }
        $no = $limitStart + 1;
        while($row = mysqli_fetch_array($SqlQuery)){
          ?>

      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['kategori_komoditas_usaha']; ?></td>
        <td><?php echo $row['nama_produk']; ?></td>
        <td><?php echo $row['brand']; ?></td>
        <td><?php echo $row['spesifikasi']; ?></td>
      </tr>
  <?php
      }
  ?>
     </tbody>      
    </table>

<center>
  <div class="row">
    <div class="col">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
      <?php
        if($page == 1){ 
      ?>        
        <li class="page-item disabled">
        <span class="page-link">Previous</span>
        </li>
      <?php
        }
        else{ 
          $LinkPrev = ($page > 1)? $page - 1 : 1;  

          if($kolomKataKunci==""){
          ?>
            <li class="page-item"><a class="page-link" href="mergertabel.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
       <?php     
          }else{
        ?> 
           <li class="page-item"><a class="page-link" href="mergertabel.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
         <?php
           } 
        }
      ?>

      <?php
        if($kolomKataKunci==""){
          $SqlQuery = mysqli_query($koneksi, "SELECT * FROM merge_umkm");
        }else{
          $SqlQuery = mysqli_query($koneksi, "SELECT * FROM merge_umkm WHERE kategori_komoditas_usaha LIKE '%$kolomKataKunci%'");
        }     
        $JumlahData = mysqli_num_rows($SqlQuery);
        $jumlahPage = ceil($JumlahData / $limit); 
        $jumlahNumber = 1; 
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
          $linkActive = ($page == $i)? ' class="active"' : '';

          if($kolomKataKunci==""){
      ?>
           <li class="page-item" <?php echo $linkActive; ?>><a class="page-link" href="mergertabel.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          
      <?php
        }else{
          ?>
          <li class="page-item" <?php echo $linkActive; ?>><a class="page-link" href="mergertabel.php?Kolom=<?php echo judul?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

          <?php
        }
      }
      ?>
      

      <?php       
       if($page == $jumlahPage){ 
      ?>
        <li class="page-item disabled">
            <span class="page-link">Next</span>
        </li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
       if($kolomKataKunci==""){
          ?>
            <li class="page-item"><a class="page-link" href="mergertabel.php?page=<?php echo $linkNext; ?>">Next</a></li>
            
       <?php     
          }else{
        ?> 
           <li class="page-item"><a class="page-link" href="mergertabel.php?Kolom=<?php echo judul;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>

      <?php
        }
      }
      ?>
        </ul>
      </nav>
    </div>
  </div></center>
  </div>
</div>