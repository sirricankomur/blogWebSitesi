<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Adıyaman'ın Yemek Kültürü</title>
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
<div id="arsemia-sayfasi"></div>
<div>
    <h3 class="yazilar-baslik">Adıyaman'ın Yemek Kültürü</h3>
    <hr>
    <p><span class="font-weight-bold">Çorbalar;</span> Dövme, Kulak çorbası, Lebeniye, Alaca, Gari otlu, Tırşık,
        Mercimek, patlıcan çorbası, Pıt pıtı çorbası, Un çorbası, Yarmalı mercimek çorbası, Yoğurtlu çorba,
        Malhıta çorbası, lorık çorbası (analı kızlı).</p>
    <p><span class="font-weight-bold">Salatalar (Manca);</span> Pirpirim, yarpuz salatası, patates salatası,
        patlıcan cacığı </p>
    <p><span class="font-weight-bold">Sebze yemekleri;</span> Dövme aşı, kabak aşı, çılbır (menemen), Dövmeç,
        Ekşili pirpirim (semizotu), Kuru domates kavurması,
        Bakla yemeği, Tevenk, Tırşık, Patlıcanlı kollotik, Sarmısaklı penık
    <p><span class="font-weight-bold">Salatalar (Manca);</span> Pirpirim, yarpuz salatası, patates salatası,
        patlıcan cacığı </p>
    <p><span class="font-weight-bold">Pilavlar;</span> bulgur, ciğerli pilav, etli pilav, mercimekli pilav,
        şehriyeli pilav, Domatesli pilav, Tevlevi aşı
        (mercimek lapası), Kenger aşı, Tavuklu pilav, Kavurmalı pilav, pancar aşı, keklikli aş, karıştırmalı aş,
        kabak aşı, mantarlı aş, keşke (kutavi) aşı, Tavşan eti aşı.</p>
    <p><span class="font-weight-bold">Köfteler;</span> Çullu köfte (yumurtalı penik), Dolmalı köfte, Ekşili
        köfte, etli köfte (çiğ köfte), içli köfte,
        patlıcanlı köfte, Kavurmalı köfte, el köfte, kollotik, kuzı sümüdü köftesi, mercimekli köfte, ör köfte,
        penık, pissik yumacı, sıcak köfte, soğuk köfte, şapalah, yarpuzlu köfte, yumurtalı köfte, yapıştırmalı
        köfte.</p>
    <p><span class="font-weight-bold">Hamur işleri;</span> Bazlama, Pekmezli taplama, Peksimet, Ekşili taplama,
        Kavurmalı hitap, ot (kenger) hıtabı,
        Hevşirik, Katmer, Kıllor, Peynirli ekmek, Semsek, Tiritli taplama</p>
    <p><span class="font-weight-bold">Tatlılar;</span> Kaygana, Aşure, Akıt, Bastıh (pestil), Bastıh kavurması,
        Bulamaç, Cemile, Dolamya (büzme), Heside,
        Kadı lokması, Kesme, Ardımut, Peynirli helva, Şillik, sütlaç, Tene helvası, Topah helvası, Kaşık
        tatlısı,
        Kırma, Nişevle, çir dolması.</p>
    <p><span class="font-weight-bold">İçecekler;</span> Gül şurubu, Urmu tut (dut) suyu, Koruk şurubu, Bal
        şerbeti, Pekmez şerbeti, Boyam şerbeti, Şeker şerbeti, limonata, menengiç kahvesi.</p>
    <p><span class="font-weight-bold">Özel günlerde;</span> Havre (tam buğday unundan yapılan sacda pişirilen
        bir çeşit ekmek), ziyaret pilavı, et kızartması, kuzu dolması, hindi dolması, keklik dolması, tavuk
        dolması, hedik, aşure.</p>
    <hr>
    <div class="container">
        <img src="../img/cigKofte.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
        <img src="../img/icliKofte.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">

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