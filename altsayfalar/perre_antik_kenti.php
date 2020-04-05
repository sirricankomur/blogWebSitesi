<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Perre Antik Kenti</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css"
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<nav class="navbar navbar-expand-lg nav navbar-dark bg-dark fixed-top">
    <a class="navbar-brand align-items-center d-flex ml-5" href="../anasayfalar/hakkinda.php">
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
                <a class="nav-link " href="../anasayfalar/hakkinda.php">HAKKINDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../anasayfalar/sehrim.php">ŞEHRİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../anasayfalar/mirasimiz.php">MİRASIMIZ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../anasayfalar/ozgecmisim.php">ÖZGEÇMİŞİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../anasayfalar/iletisim.php">İLETİŞİM</a>
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
<div id="perre-sayfasi"></div>
<div>
    <h3 class="yazilar-baslik">Perre Antik Kenti</h3>
    <hr>
    <p>Eski kaynaklarda Me’arath gazze Pörön, Mezopotamya’da ise Pirin ve Perin olarak bilinen Kommagene
        Krallığı’nın beş büyük kentinden biri olan <span class="font-weight-bold">Perre Antik Kenti</span>,
        Melitene’yi (Malatya) başkent Samosata’ya (Samsat) bağlayan yol güzergahı üzerinde olması nedeniyle
        geçmişte jeopolitik bir öneme sahipti.</p>
    <p>Hierapolis (Kutsal Şehir) olarak anılan Perre MS. 325 yılında Nicaea (İznik)’de toplanan İncil konsiline
        Piskopos İoannes Perdos yönetimindeki Persidas eyaletinin bir şehri olarak katılır. MS. 433 yılında
        Samosata’lı (Samsatlı) Andreasın Alexander’e yazdığı mektupta Perre’de bulunan bazı önemli
        piskoposlardan bahsetmesi kentin dinsel açıdan da önemli bir kent olduğunu gösterir. Bütün bunlar Perre
        Antik Kenti'nin <span class="font-weight-bold">Antik Dönem</span>'de hem dinsel hem de jeopolitik öneme
        sahip bir kent olduğunu
        göstermektedir. </p>
    <p><span class="font-weight-bold">Antik Roma</span> kaynaklarında suyunun güzelliğinden bahsedilmekte,
        kervanlar, yolcular ve ordular tarafından
        dinlenme yeri olarak kullanıldığı anlatılmaktadır. Bahsedilen suyun aktığı Roma Çeşmesi halen
        kullanılmaktadır.</p>
    <p>Perre Antik Kenti, <span class="font-weight-bold">Bizans Dönemi</span>'nden sonra önemini yitirmiş ve
        eski parlak dönemini bir daha yakalayamamıştır. Antik kentin asıl yerleşim kısmı üzerinde bugün Örenli Mahallesi
        olarak geçen ancak
        özünde köy görünümüne sahip geç dönem yerleşimi mevcuttur. Burada bulunan kaya mezarları kayalıklar
        içine oyularak yapılmıştır ve harika görünüme sahiptirler.</p>
    <hr>
    <div class="container">
        <img src="../img/perreA1.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
        <img src="../img/perreA3.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
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