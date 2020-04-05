<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Cendere Köprüsü</title>
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
<div id="cendere-sayfasi"></div>
<div>
    <h3 class="yazilar-baslik">Cendere Köprüsü</h3>
    <hr>
    <p><span class="font-weight-bold">Cendere Köprüsü</span>, <span class="font-weight-bold">Roma Köprüsü</span>
        veya <span class="font-weight-bold">Septimius Severus Köprüsü</span> olarak da bilinir. Antik Cabinas
        (Cendere)
        Çayı üzerinde yer almaktadır. Köprü muhteşem bir kanyondan akan çayın iki tarafını birleştirdiği için bu
        isim verilmiştir. Kâhta İlçesi'nden Nemrut Dağı’na doğru giderken <span class="font-weight-bold">Karakuş Tümülüsü</span>’nü
        geçtikten yaklaşık 10 kilometre sonra Sincik-Kocahisar yol ayrımında bulunmaktadır. Köprü Roma
        İmparatoru Septimius Severus’un (MS 193-211) emriyle o tarihte <span class="font-weight-bold">Samsat</span>’ta
        <span class="font-weight-bold">(Somasata)</span> karargâh kuran XVI. Lejyon tarafından yaptırılmıştır.
    </p>
    <p>Cendere Köprüsü, Antik Roma mimarisinin muhteşem bir anıtsal örneğidir. Biri ana kemer ve biri tahliye
        kemeri olmak üzere iki kemerden oluşan köprü her biri tonlarca ağırlıkta olan düzgün kesme taşlardan
        yapılmıştır. 7 metre genişliğinde, 30 metre yüksekliğinde ve 120 metre uzunluğunda olan köprünün en
        ilginç mimari özelliği harç kullanılmadan yapılmış olmasıdır. Köprü, her iki tarafından rampa biçiminde
        yükselerek orta kısımda birleşmektedir. Bu özellik köprünün hem statik olarak dayanıklılığını artırmakta
        hem de köprüye anıtsal bir görünüm kazandırmaktadır.</p>
    <p>Köprünün güneydeki girişin her iki tarafında birer adet korint düzeninde sütun bulunmaktadır. Üzerinde
        yer alan yazıtlardan birinin köprüyü yaptıran İmparator Septimius Severus, diğerinin ise onun karısı
        <span class="font-weight-bold">Julia Domna</span> adına dikildiği anlaşılmaktadır. Kuzeydeki girişin bir
        tarafında bulunan sütun üzerindeki yazıt ise bu sütunun oğulları
        <span class="font-weight-bold">Caracalla</span> adına dikildiğini göstermektedir. Bu sütunun karşısında köprünün
        yapıldığı dönemde oğulları <span class="font-weight-bold">Geta</span> adına dikilmiş bir sütun daha
        olduğu bilinmektedir. Ancak Septimius Severus’tan sonra tahta geçen İmparator Caracalla (MS 211-217),
        kardeşi Geta’yı öldürterek Roma topraklarında Geta adına dikilen ne varsa yıktırmış, bu yıkımdan Cendere
        Köprüsü de nasibini almış ve kardeşi Geta adına dikilen sütun kaldırılmıştır.</p>
    <p>Cendere Köprüsü’nün, yapımından sonra <span class="font-weight-bold">Roma Dönemi</span>’nde değişik
        zamanlarda onarım gördüğü, köprünün korkuluk kısmında yer alan yazıtlardan anlaşılmaktadır.</p>
    <hr>
    <div class="container">
        <img src="../img/cendere2.jpg" class="figure-img rounded-top img-fluid"  alt="Görüntü görüntülenemiyor!">
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