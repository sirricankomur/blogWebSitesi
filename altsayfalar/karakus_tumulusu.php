<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Karakuş Tümülüsü</title>
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
<div id="karakus-tumulusu-sayfasi"></div>
<div>
    <h3 class="yazilar-baslik">Karakuş Tümülüsü</h3>
    <hr>
    <p><span class="font-weight-bold">Karakuş Tümülüsü</span> Adıyaman Kahta İlçesi sınırları içinde yer alan
        Kommagene Krallık Ailesi'nin kadınlarına
        ait bir anıt mezardır. Tümülüsün üzeri çay taşlarının yığılmasıyla oluşmuştur. Yaklaşık 20 metre
        yüksekliğindeki tümülüsün güneyinde dikili bulunan sütun üzerindeki kartal heykelinden dolayı yöre halkı
        tarafından 'karakuş' olarak anılmış ve literatüre bu isimle girmiştir.</p>
    <p>Tümülüsün doğusunda iki adet yaklaşık 10 metre yüksekliğinde sütun bulunmaktadır. Bir sütun üzerinde
        boğa, diğer sütun üzerinde ise aslan heykeli motifi bulunmaktaydı. Ancak günümüzde sadece boğa motifi
        durmaktadır ve onun da baş kısmı yok olmuştur.</p>
    <p>Tümülüsün batısında ise Kommagene Kralı I. Antiochos’un (MÖ 69 – 36) oğlu Kral II. Mithridates’in (MÖ.
        36-20) kız kardeşi Laodike ile tokalaşma kabartması yer alır. Sütun üzerindeki yazıttan anıt mezarın
        Kral Antiochos’un eşi İsias, kızı Antiochis ve torunu Aka’ya ait olduğu anlaşılmaktadır.</p>
    <hr>
    <div class="container">
        <img src="../img/karakusTepesi.jpg" class="figure-img rounded-top img-fluid"  alt="Görüntü görüntülenemiyor!">
        <img src="../img/karakusTepesi2.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
        <img src="../img/karakusTepesi3.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
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