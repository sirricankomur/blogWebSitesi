<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Özgeçmişim</title>
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
                <a class="nav-link" href="mirasimiz.php">MİRASIMIZ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ozgecmisim.php">ÖZGEÇMİŞİM</a>
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
                 <a href="giris.html">
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
        <h1 class="mirasimiz-baslik">ÖZGEÇMİŞİM</h1>
        <h3 class="mirasimiz-soz">Eğitim ve Spor Özgeçmişim</h3>
    </div>
</div>

<div>
    <br>
    <h3>Eğitim Geçmişim</h3>
    <table class="table table-striped table-hover table-light">
        <caption class="tablo-elemanlari-tazi-tipi text-muted">Eğitim Bilgileri</caption>
        <thead class="thead-dark tablo-tazi-tipi">
        <tr>
            <th scope="col">Dönem</th>
            <th scope="col">Eğitim</th>
        </tr>
        </thead>
        <tbody class="tablo-elemanlari-tazi-tipi">
        <tr>
            <th scope="row">2003 - 2011</th>
            <td>Adıyaman Menderes İlköğretim Okulu</td>
        </tr>
        <tr>
            <th scope="row">2011 - 2015</th>
            <td>Adıyaman Lisesi</td>
        </tr>
        <tr>
            <th scope="row">2017 - 2019</th>
            <td>Sakarya Üniversitesi Makine Mühendisliği</td>
        </tr>
        <tr>
            <th scope="row">2019 -</th>
            <td>Sakarya Üniversitesi Bilgisayar Mühendisliği</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <h3>Katıldığım Etkinlikler</h3>
    <table class="table table-striped table-hover table-light">
        <caption class="tablo-elemanlari-tazi-tipi text-muted">Katıldığım Etkinlikler</caption>
        <thead class="thead-dark tablo-tazi-tipi">
        <tr>
            <th scope="col">Yıl</th>
            <th scope="col">Yer</th>
            <th scope="col">Etkinlik Adı</th>
        </tr>
        </thead>
        <tbody class="tablo-elemanlari-tazi-tipi">
        <tr>
            <th scope="row">2008</th>
            <td>Gaziantep</td>
            <td>9-12 Yaş 12 Dev Adam Turnuvaları</td>
        </tr>
        <tr>
            <th scope="row">2009</th>
            <td>Batman</td>
            <td>9-12 Yaş 12 Dev Adam Turnuvaları</td>
        </tr>
        <tr>
            <th scope="row">2009</th>
            <td>Adıyaman</td>
            <td>Okullar Arası Futbol Turnuvası</td>
        </tr>
        <tr>
            <th scope="row">2010</th>
            <td>Elazığ</td>
            <td>13-16 Yaş 12 Dev Adam Turnuvaları</td>
        </tr>
        <tr>
            <th scope="row">2010</th>
            <td>Adıyaman</td>
            <td>Okullar Arası Futbol Turnuvası</td>
        </tr>
        <tr>
            <th scope="row">2011</th>
            <td>Antalya</td>
            <td>12 Dev Adam Altyapı Seçmeleri</td>
        </tr>
        <tr>
            <th scope="row">2011</th>
            <td>Van</td>
            <td>Doğu Basketbol Turnuvası</td>
        </tr>
        <tr>
            <th scope="row">2011</th>
            <td>Adıyaman</td>
            <td>Okullar Arası Futbol Turnuvası</td>
        </tr>
        <tr>
            <th scope="row">2011</th>
            <td>Adıyaman</td>
            <td>Okullar Arası Basketbol Turnuvası</td>
        </tr>
        <tr>
            <th scope="row">2012</th>
            <td>Adıyaman</td>
            <td>Doğu Baketbol Turnuvası</td>
        </tr>
        <tr>
            <th scope="row">2015</th>
            <td>Adıyaman</td>
            <td>Liseler Arası Basketbol Turnuvası</td>
        </tr>
        </tbody>
    </table>
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