<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mirasımız</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<nav class="navbar navbar-expand-lg nav navbar-dark bg-dark fixed-top">
    <a class="navbar-brand align-items-center d-flex ml-5" href="hakkinda.php">
        <svg class="bi bi-view-list" width="1.8em" height="1.8em" viewBox="0 0 16 16" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M3 4.5h10a2 2 0 012 2v3a2 2 0 01-2 2H3a2 2 0 01-2-2v-3a2 2 0 012-2zm0 1a1 1 0 00-1 1v3a1 1 0 001 1h10a1 1 0 001-1v-3a1 1 0 00-1-1H3zM1 2a.5.5 0 01.5-.5h13a.5.5 0 010 1h-13A.5.5 0 011 2zm0 12a.5.5 0 01.5-.5h13a.5.5 0 010 1h-13A.5.5 0 011 14z"
                  clip-rule="evenodd"/>
        </svg>
        <strong class="ml-2">SIRRI CAN</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mr-5" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="hakkinda.php">HAKKINDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sehrim.php">ŞEHRİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="mirasimiz.php">MİRASIMIZ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ozgecmisim.php">ÖZGEÇMİŞİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İLETİŞİM</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

            <?php
            if (isset($_SESSION["kullaniciAdi"])) {
                echo <<<html
            <li class="nav-item">
                <div class="btn-group">         
                <button class="btn btn-navbar">   
                    <a class="dropdown-toggle" id="navbarDropdown" 
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
html;
                echo $_SESSION["kullaniciAdi"] . ", giriş yapıldı.";
                echo <<<html
                    </a>
                    <div class="dropdown-menu dropdown-menu-right btn-block" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../altsayfalar/son_gonderilen_mesaj.php">Son gönderilen mesaj</a>  
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../altsayfalar/hoscakalin.php">Çıkış</a>    
                    </div>
                    </button>    
                </div>
            </li>
html;

            } else {
                echo <<<html
            <li class="nav-item">
                 <a href="../anasayfalar/giris.html">
                <button class="btn btn-navbar" type="button">GİRİŞ</button>
            </a>
                                 
            </li>
html;
            }
            ?>

        </form>
    </div>
</nav>
<div id="anasayfa">
    <div class="hosgeldiniz">
        <h1 class="mirasimiz-baslik">MİRASIMIZ</h1>
        <h3 class="mirasimiz-soz">Adıyaman'ın mirası <span class="font-weight-bold">hepimizin</span> mirasıdır.</h3>
    </div>
</div>



<div class="mirasimiz-yazilar">
    <h1 class="mirasimiz-yazilar-baslik">YAZILAR</h1>
    <hr>
    <div class="row">
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/nemrutH2.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Şehrim</h3>
                <p class="card-text">Adıyaman'ın 40.000 yıllık tarihi ile şekillenen şehrimizin mirası...
                    Gezilecek yerler, yemek kültürü, Adıyaman'ın mirası...</p>
                <a href="sehrim.php" class="btn btn-card">Okumak için tıkla</a>
            </div>
        </div>

        <div class="card col-sm-12 col-md-6 col-lg-4" >
            <img src="../img/nemrutH1.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Nemrut Dağı</h3>
                <p class="card-text">Kommagene kralı Antiochos Theos, MÖ 62 yılında pek çok Yunan ve Pers
                    tanrısının heykelinin yanı sıra...</p>
                <a class="btn btn-card" href="../altsayfalar/nemrut_dagi.php">Okumak için tıkla</a>
            </div>
        </div>


        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/arsemia.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Arsemia</h3>
                <p class="card-text">Kral I. Antiochos kitabelerinde söz edildiğine göre; Arsameia İ.Ö. 2'inci yüzyılın
                    başlarında Kommagene'lerin atası...</p>
                <a class="btn btn-card" href="../altsayfalar/arsemia.php">Okumak için tıkla</a>
            </div>
        </div>

        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/kahtaKalesi2.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Kâhta Kalesi</h3>
                <p class="card-text"> Nemrut Dağı Tur güzergahında olan<span
                    class="font-weight-bold">Eski Kahta kalesi</span> üç önemli
                medeniyetin izlerini taşımaktadır. Köprü muhteşem bir kanyondan akan çayın iki tarafını...</p>
                <a class="btn btn-card" href="../altsayfalar/kahta_kalesi.php">Okumak için tıkla</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/cendere3.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Cendere Köprüsü</h3>
                <p class="card-text"><span class="font-weight-bold">Cendere Köprüsü</span>, <span
                        class="font-weight-bold">Roma Köprüsü</span>
                    veya <span class="font-weight-bold">Septimius Severus Köprüsü</span> olarak da bilinir. Antik
                    Cabinas
                    (Cendere) Çayı...</p>
                <a class="btn btn-card" href="../altsayfalar/cendere_koprusu.php">Okumak için tıkla</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/karakusTepesi2.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Karakuş Tümülüsü</h3>
                <p class="card-text"><span class="font-weight-bold">Karakuş Tümülüsü</span> Adıyaman Kahta İlçesi
                    sınırları içinde yer alan
                    Kommagene Krallık Ailesi'nin kadınlarına
                    ait bir anıt mezardır.</p>
                <a class="btn btn-card" href="../altsayfalar/karakus_tumulusu.php">Okumak için tıkla</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/perreA1.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Perre Antik Kenti</h3>
                <p class="card-text">Eski kaynaklarda Me’arath gazze Pörön, Mezopotamya’da ise Pirin ve Perin olarak
                    bilinen Kommagene
                    Krallığı’nın beş büyük...</p>
                <a class="btn btn-card" href="../altsayfalar/perre_antik_kenti.php">Okumak için tıkla</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/haydaran.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Kaya Mezarları</h3>
                <p class="card-text">...güneş tanrısı Helios ile Kommagene kralı Mithridates’in... / Roma dönemine ait
                    60 kadar kaya mezarından oluşmaktadır.</p>
                <a class="btn btn-card" href="../altsayfalar/kaya_mezarlari.php">Okumak için tıkla</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <img src="../img/cigKofte.jpg" class="card-img-top card-resim" alt="Görüntü görüntülenemiyor!">
            <div class="card-body">
                <h3 class="card-title card-baslik">Adıyaman'ın Yemek Kültürü</h3>
                <p class="card-text">Adıyaman'ın çorbalarından, sebze yemeklerine; salatalarından pilavlarına;
                köftelerinden hamur işlerine; tatlılarından içeceklerine yemek kültürü</p>
                <a class="btn btn-card" href="../altsayfalar/adiyamanin_yemek_kulturu.php">Okumak için tıkla</a>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="offset iletisim-alani">
    <footer>
        <svg class="bi bi-view-list" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M3 4.5h10a2 2 0 012 2v3a2 2 0 01-2 2H3a2 2 0 01-2-2v-3a2 2 0 012-2zm0 1a1 1 0 00-1 1v3a1 1 0 001 1h10a1 1 0 001-1v-3a1 1 0 00-1-1H3zM1 2a.5.5 0 01.5-.5h13a.5.5 0 010 1h-13A.5.5 0 011 2zm0 12a.5.5 0 01.5-.5h13a.5.5 0 010 1h-13A.5.5 0 011 14z"
                  clip-rule="evenodd"/>
        </svg>
        <blockquote class="blockquote">
            <p class="iletisim-soz">Yaşam, ancak ve ancak uyum ve umut ile mümkündür.</p>
        </blockquote>
        <p class="iletisim-bilgisi">g191210379@sakarya.edu.tr</p>
        <hr class="iletisim-alani-cizgi-tipi">
        &copy; Sırrı Can KÖMÜR
    </footer>
</div>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>
</html>