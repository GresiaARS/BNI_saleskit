<!DOCTYPE html>
<html lang="en">
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
.btn-1 {
    margin-top: 50px;
    margin-left: 50px;
    background-color: aliceblue;
    border-radius: 40px;
    color: #FF6600;
    padding: 5px 10px;
    float: left;
}

.btn-1:hover{
    background-color: #FF6600;
    color: white;
}


.box-1 {
 width:700px;
 height: 500px;
 padding: 20px;
 background: rgba( 217, 217, 217, 0.71);
 border-radius: 40px;
 color: #FF6600;
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
}

h2{
  font-family: sans-serif;
  font-weight: normal;
}
 
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
  <div class="col-sm-6 xyz text-center" style="background-image: url(asset/carousel.png);  height:960px">
    <a href ="informasitambahan.php" class="btn-1" style="text-decoration: none; margin-top:7%; margin-left: 5%;"> <  Back</a>
  <div style="padding:100px; margin-top: 20%;"> 
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: white; margin-top:-20%;">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner" style="padding: 20px;">
          <div class="item active">
            <img src="asset/slider/KUR.jpeg" style="width:100%;">
          </div>

          <div class="item">
            <img src="asset/slider/KUK.jpeg"  style="width:100%;">
          </div>
    
          <div class="item">
            <img src="asset/slider/WU.jpeg"  style="width:100%;">
          </div>
        </div>



      <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
  </div>

  <div class="col-sm-6 text-center">
     <div style="margin-right:-90%; margin-top:7%;"><a href ="end.php" class="btn-2" style="text-decoration: none; color: #FF6600;"> Exit  ></a></div>
    <div class="container-fluid" style="margin:20%;">
      <h3 class="" style=""><h3 ><b>Simulasi Pinjaman Kredit</b></h3><h8> Kami akan membantu anda dalam memperkirakan kebutuhan dan 
             keuntungan<br> yang anda akan dapatkan  jika mengajukan pinjaman kredit kami</h8><br>
     <div style="padding-left:20%;"> <a href ="simulasikredit.php" class="btn-1" style="text-decoration: none;">Simulasi Pinjaman Kredit</a></div>
    </div>
  </div>
</div>

</body>
</html>
