<?php
    $kullaniciadi = $_POST['kullaniciadi'];
    $sifre = $_POST['sifre'];
    $error = "";
    $success = "";

    if(isset($_POST['oturum'])){
        if($kullaniciadi=="b191210007@sakarya.edu.tr"){
            if($sifre=="b191210007"){
                $error = "";
                header("Location : oturumkontrol.php");
            }
            else{
                $error = "Parola Yanlış";
                $success = "";
            }
        }
        else{
            $error = "Kullanıcı Adı Yanlış";
            $success = "";
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Şevin Sena Dere</title>
  </head>
  <body>
    
    <!--Menü Kısmı Başlangıcı-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" ><img src="resimler/kayisi.png" class="rounded-circle" width=50px height=50px alt="Kayısı Logo" title="Kayısı Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Hakkımda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="takimimiz.html">Takımımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İletişim</a>
              </li>
            </ul>
          </div>
          <form class="d-flex">
            <button class="btn btn-outline-success" type="submit"><a class="nav-link" href="oturum.html">Oturum Aç</a></button>
          </form>
        </div>
      </nav>
      <!--Menü Kısmı Bitişi-->

    <section >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 align-self-center">
            <div class="col-6 align-self-center oturum">
              <h2 class="text-center p-4">OTURUM AÇ</h2>
              <br>
              <p class="error"><?php echo $error ; ?></p><p class="success"><?php echo $success ; ?></p>
              <form action="oturumkontrol.php" method="POST">
                <div class="row justify-content-center ">
                  <div class="col-12 koturum">
                    <label>Kullanıcı Adı : </label>
                    <input autofocus="autofocus" type="email" class="form-control koturum" name="kullaniciadi" placeholder="Kullanıcı Adı" required>
                  </div>
                  <div class="col-12 koturum">
                    <label>Şifre : </label>
                    <input autocomplete="off" type="password" class="form-control koturum" name="sifre" placeholder="Şifre" required>
                  </div>
                  <div class="col-12 koturum">
                    <button type="submit" class="btn btn-block btn-dark koturum" name="oturum">OTURUM AÇ</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    


      <!--Footer Başlangıcı-->
      <footer class="altmenu">
        <div class="container">
          <a href="https://www.instagram.com/sevinndr/" target="_blank">
            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
          </a>
          <a href="https://github.com/drsevin" target="_blank">
            <i class="fa fa-github fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
          </a>
          <a href="https://tr.linkedin.com/in/%C5%9Fevin-sena-dere-aa4a861b3" target="_blank">
            <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
          </a>
          
        </div>
        <div>
          <p class="altyazi">
            <span>Tüm Hakları Saklıdır &copy; | 2021 </span><br>
            <span>Designed by <b>Şevin Sena Dere</b></span>
          </p>
        </div>

      </footer>
      <!--Footer Bitişi-->


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>