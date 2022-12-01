<?php 
include 'config.php';
?>
<html>
<head>
  <style>
.btn-1 {
    margin-top: 50px;
    margin-left: 50px;
    background-color: aliceblue;
    border-radius: 40px;
    color: #FF6600;
    padding: 5px 10px;
    float: left;
    height: 40px;
    box-shadow: 0px 5px 5px 5px #D9D9D9;
}

.btn-1:hover{
    background-color: #FF6600;
    color: white;
    box-shadow: 0px 5px 5px 5px #D9D9D9;
}


.img {
 padding-top: 50px;
 padding-bottom: 50px;
}

.bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {

}
}
  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<section class="vh-100" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="asset/bgtrans.png" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>





      
      <div class="col-sm-6 text-black" style="margin-top: 5%;">
<div>
        <div style="text-align: right;">
         <a href ="end.php" class="btn-2" style="text-decoration: none; color: #FF6600;">Exit   ></a> 
       </div>

</div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form>
            <div><h3 class="" style="">Lorem impsum</h3><h8> Ketahui negara dengan jumlah permintaan pasar terbanyak <br> sesuai produk yang kamu punya!</h8></div>
<br>

            <div>

<a href ="simulasikredit.php" class="btn-1" style="text-decoration: none;">Simulasi Pinjaman Kredit</a>
</div>
          </form>

        </div>

      </div>
      
    </div>
  </div>
</section>

