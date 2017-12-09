<!doctype html>
<html lang="en">
  <head>
    <title>Enkripsi Base64</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/style.css" >
    <!-- JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
            <li><a href="#bantuan">BANTUAN</a></li>
            <li><a href="#enkripsi">ENKRIPSI</a></li>
            <li><a href="#dekripsi">DEKRIPSI</a></li>
          </ul>
        </div>
      </div>
    </nav> 

    <div class="container-fluid bg-cover" id="home" style="margin-top:0px;">
      <div class="page-header">
        <h1>SISTEM KEAMANAN GAMBAR</h1> 
      </div>
      <p>Menggunakan Algoritma Base64</p> 
    </div>

    <div id="bantuan" class="container-fluid bg-1" style="margin-top:0px;">
      <div class="row">
        <div class="col-md-4">
          <h3>Petunjuk Penggunaan</h3>
          <hr class="botm-line">
          <p>
            Sistem Keamanan Gambar merupakan suatu aplikasi pengamanan gambar menggunakan Algoritma Base64 dalam metode proses encode dan decode. Untuk mengetahui cara menggunakannya Anda bisa meng-klik Button yang terdapat dibawah ini :
          </p>
          <a class="btn purple" href="#demoEn" data-toggle="collapse">Enkripsi | <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
          <a class="btn purple" href="#demoDe" data-toggle="collapse">Dekripsi | <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>

          <br><br>

          <div id="demoEn" class="collapse">
            Lorem ipsum dolor text....
          </div>

          <div id="demoDe" class="collapse">
            Lorem ipsum dolor text....
          </div>

        </div>
        <div class="col-md-8">
          <h3>Format Gambar</h3>
          <hr class="botm-line">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <p>.jpg</p>
                </div>
                <div class="panel-body">
                  <img src="assets/img/jpg.png" class="img-responsive" alt="logo .jpg" style="width: 200px;">
                </div>
              </div>               
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <p>.jpeg</p>
                </div>
                <div class="panel-body">
                  <img src="assets/img/065cc317452ef66fc94221ff7d544b5a.png" class="img-responsive" alt="logo .jpg" style="width: 200px;">
                </div>
              </div>               
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <p>.png</p>
                </div>
                <div class="panel-body">
                  <img src="assets/img/7539a8d9ee940f052a34a4eaae4775a1.png" class="img-responsive" alt="logo .jpg" style="width: 200px;">
                </div>
              </div>               
            </div>
          </div>
          <div class="row">  
            <div class="col-md-4 col-sm-4">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <p>.bmp</p>
                </div>
                <div class="panel-body">
                  <img src="assets/img/BMP.png" class="img-responsive" alt="logo .jpg" style="width: 200px;">
                </div>
              </div>               
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <p>.gif</p>
                </div>
                <div class="panel-body">
                  <img src="assets/img/e5e37cbddc91007668825ec679b6a461.png" class="img-responsive" alt="logo .jpg" style="width: 200px;">
                </div>
              </div>               
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <p>.psd</p>
                </div>
                <div class="panel-body">
                  <img src="assets/img/aa9076ce47ddc2276c479d103d387774.png" class="img-responsive" alt="logo .jpg" style="width: 200px;">
                </div>
              </div>               
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="enkripsi" class="container-fluid bg-1" style="margin-top:0px;">
      <div class="row">
        <div class="col-md-4">
          <h3>Enkripsi</h3>
          <hr class="botm-line">
            <form method="post" enctype="multipart/form-data">
              <label>Masukan Gambar   :</label>
              <div class="form">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                  <input id="upload" type="file" class="form-control" name="gambar">
                </div><br>
                <button class="btn btn-default purple" type="submit" id="submit" name="submit">Enkripsi | <span class="glyphicon glyphicon-upload" aria-hidden="true"></span></button><br><br>
              </div>
            </form>
        </div>
        <div class="col-md-8">
          <h3>Hasil Enkripsi</h3>
          <hr class="botm-line">
                <?php

                $valid_array = array('jpg','jpeg','png','gif','bmp');
                if(isset($_POST['submit']) && $_FILES['gambar']['size']>0){

                  $ext = @strtolower(end(@explode('.', $_FILES['gambar']['name'])));

                  if(in_array($ext, $valid_array)){

                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$_FILES['gambar']['name']);
                    
                    $enkripsi = base64_encode(file_get_contents('gambar/'.$_FILES['gambar']['name']));
                    ?>
                <br>
                <textarea class="form-control" rows="8" id="comment"><?php echo $enkripsi; ?></textarea><br>
                <button class="btn btn-default purple" type="submit" id="submit" name="submit">Get .txt | <span class="glyphicon glyphicon-download" aria-hidden="true"></span></button>
                <?php

                  }else{

                    echo "<br><div class='alert alert-danger'><strong>Maaf... file yang ada pilih bukan file gambar. Hanya file JPG, PNG, GIF, BMP atau PSD yang boleh diupload..!</strong></div>";

                  }

                  }

                ?>
        </div>
      </div>
    </div>

    <div id="dekripsi" class="container-fluid bg-1" style="margin-top:0px;">
      <div class="row">
        <div class="col-md-4">
          <h3>Dekripsi</h3>
          <hr class="botm-line">
          <form method="post" enctype="multipart/form-data">
            <label>Masukan Plaintext   :</label>
              <div class="form">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                  <textarea class="form-control" rows="12" id="comment" name="teks"></textarea>
                </div><br>
                <button class="btn btn-default purple" type="submit" id="submit" name="submit">Dekripsi | <span class="glyphicon glyphicon-upload" aria-hidden="true"></span></button>
              </div>
          </form>
        </div>
        <div class="col-md-8">
          <h3>Hasil Enkripsi</h3>
          <hr class="botm-line">
          <?php
            if(isset($_POST['submit'])){
              $teks = @$_POST['teks'];
          ?>
          <br>
          <img style="" border="0" src="data:image/jpeg;base64,<?php echo $teks;?>" class = "img-thumbnail img-responsive">
        </div>
          <?php
            }
          ?>        
      </div>
    </div>

    <!-- JavaScript -->
    <script>
      $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            });
          } // End if 
        });
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>