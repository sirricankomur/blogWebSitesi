<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Nemrut Dağı</title>
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
<div id="nemrut-sayfasi"></div>

<div>
    <h3 class="yazilar-baslik">Nemrut Dağı</h3>
    <hr>
    <p>Adıyaman ili Kahta ilçesi sınırları içerisinde bulunan, yüksekliği on metreyi bulan büyüleyici
        heykelleri, metrelerce uzunluktaki kitabeleriyle <span
                class="font-weight-bold">Kommagene Krallığı</span>’nın kutsal alanı olarak nitelendirilen Nemrut
        Dağı, 1987 yılında UNESCO Dünya Miras Listesi’nde kültürel varlık olarak yerini almıştır.</p>
    <p><span class="font-weight-bold">Nemrut Dağı</span>, Anadolu’da Helenistik Dönem’e ait en görkemli kutsal
        kalıntıları barındırır. Yazıtlara göre <span class="font-weight-bold">I. Antiochos</span>
        tanrılara ve atalarına minnettarlığını göstermek için görkemli bir anıt mezar, mezar odasının üzerine
        kırma taşlardan oluşan bir tümülüs ve tümülüsün üç tarafını çevreleyen kutsal alanlar inşa ettirmiştir.
    </p>
    <p>Doğu, Batı ve Kuzey terasları olarak adlandırılan bu alanlardan Doğu ve Batı teraslarında büyük boyutlu
        heykeller, kabartmalar ve yazıtlar bulunmaktadır. Tanrıların tasvir edildiği beş heykelin arasında I.
        Antiochos’un heykeli de yer almaktadır.</p>
    <p>Heykel sırası bir aslan ve kartal heykeli ile başlar. Aslan yeryüzündeki gücü, tanrıların habercisi olan
        kartal ise göksel gücü temsil etmektedir.</p>
    <p>Doğu Terası ise Tanrılar Galerisi, Atalar Galerisi ve Sunak’tan oluşmaktadır. Doğu teras ile batı teras
        heykel dizileri aynıdır. Ancak Doğu terastaki tahtlar, batı terasta ise heykel başları daha sağlamdır.
        Doğu ve Batı Terası’nda heykellerin tahtlarını oluşturan taş blokların arkasında Grekçe yazılmış 237
        satırlık uzun bir kült yazıtı (nomos) bulunmaktadır. I. Antiochos’un vasiyetnamesi niteliğindeki yazıtta
        bu kutsal alan hakkında bilgiler ve kültün uygulanması ile ilgili hükümler yer almaktadır.</p>
    <p>Tamamlanmamış stel ve kaidelerin bulunduğu Kuzey Terası ise Doğu ve Batı teraslarını birbirine bağlayan
        tören yoludur. </p>
    <p><span class="font-weight-bold">UNESCO Dünya Miras Listesi’ne Alınma Tarihi: </span>1987</p>
    <p><span class="font-weight-bold">Liste Sıra No: </span>448</p>
    <hr>
    <div class="container">
        <img src="../img/nemrutH2.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
        <img src="../img/nemrutH3.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
        <img src="../img/nemrutH4.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
        <img src="../img/nemrutH5.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
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