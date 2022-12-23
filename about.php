<html>
<head>
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 14px;
  width: 75%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 17px;
  transition: 0.4s;
}

.activee, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  width: 75%;
  overflow: hidden;
  transition: ease-out;
}

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
</head>

<body>
<div style="height: 10%;"></div>

<div style="margin-left: 10%;">
<a href ="index.php" class="btn-2" style="text-decoration: none; color: #FF6600;"><b> <  Back</b></a>

<div class="row">
  <div class="col-sm-6"><h1> Halo, senang bertemu <br> dengan anda!<br>
<h6>Yuk! kenal lebih dekat dengan platform Xpora</h6>
<a href ="https://xpora.bni.co.id/contact/complaint" class="btn btn" style="border-radius: 30px; background-color: #FF6600; color: white; margin-top: 30px;"> Hubungi Xpora</a>
</div>
  <div class="col-sm-6">
  <div class="img"><img src="asset/logotrans.png"></div>
</div>
</div>
</div>

 <div class="container" style="margin-top: 20px; margin-left: 9%;">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <div class="row" style="text-align: left;">
             <div>
                <button class="accordion"> + Apa itu Xpora?</button>
                <div class="panel">
                  <p>Xpora merupakan one stop shopping solution BNI untuk pelaku usaha UMKM yang ingin mengembangkan bisnisnya menuju UMKM Go Productive, Go Digital & Go Global.</p>
                </div>
                <button class="accordion"> + Apa itu Digital Platform Xpora?</button>
                <div class="panel">
                  <p>Digital Platform Xpora merupakan sebuah tools dari one stop shopping BNI untuk calon UMKM yang ingin memulai bisnis dan UMKM yang ingin mengembangkan bisnisnya.</p>
                </div>
                <button class="accordion"> + Mengapa Anda harus bergabung dengan Xpora?</button>
                <div class="panel">
                  <p>Pengguna Xpora dapat mengakses Digital Platform Xpora yang memberikan berbagai solusi untuk UMKM secara komprehensif dan terintegrasi mulai dari kemudahan untuk memperluas akses pasar, meningkatkan kapabilitas melalui program pelatihan dan pendampingan, dan pemberdayaan bisnis ekspor melalui B2B matchmaking dengan potential buyer di luar negeri.</p>
                </div>
                <button class="accordion"> + Bagaimana Kami membantu Anda?</button>
                <div class="panel">
                  <p>Xpora memberikan berbagai rekomendasi solusi keuangan dan solusi digital secara komprehensif dan terintegrasi melalui pengembangan bisnis yang tepat sesuai dengan tingkat pengalaman pelaku usaha melalui Cek Level Bisnis, menyediakan akses wawasan bisnis melalui video pembelajaran yang bisa diikuti melalui pelatihan dan Inspirasi, membuka kesempatan ekspor ke pasar internasional melalui Ekspansi Market, menyediakan alat digital penunjang kegiatan usaha melalui SME Tools, dan berbagai layanan lainnya.</p>
                </div>
            </div>
        </div>
        </div>

      </div>
    </div>
<!-- FOOTER -->
  <div class="row" style="margin-left: 10%; margin-top: 75px;">
  <div class="col-sm-4"><img style="width: 30%;" src="asset/logo.png"></div>
  <div class="col-sm-4" style="font-size: x-small; color: #868686">© PT. Bank Negara Indonesia (Persero), Tbk. All Rights Reserved, 2022</div>
  <div class="col-sm-4"><img style="width: 35%;" src="asset/kanan.png"></div>
</div>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activee");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>