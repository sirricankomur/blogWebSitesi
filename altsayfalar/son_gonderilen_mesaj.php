<?php
session_start();

if(!empty($_POST["ad"])){
    $_SESSION["ad"] = $_POST["ad"];
}
if(!empty($_POST["soyad"])){
    $_SESSION["soyad"] = $_POST["soyad"];
}
if (!empty($_POST["eposta"])) {
    $_SESSION["eposta"] = $_POST["eposta"];
}
if (!empty($_POST["uye"])) {
    $_SESSION["uye"] = $_POST["uye"];
}
if (!empty($_POST["mesajTuru"])) {
    $_SESSION["mesajTuru"] = $_POST["mesajTuru"];
}

if (!empty($_POST["arayuz"])) {
    $_SESSION["arayuz"] = $_POST["arayuz"];
    $_SESSION["konu"] = $_POST["arayuz"];
} else {
    if (!empty($_POST["icerik"])) {
        $_SESSION["icerik"] = $_POST["icerik"];
        $_SESSION["konu"] = $_POST["icerik"];
    } else {
        if (!empty($_POST["uyelik"])) {
            $_SESSION["uyelik"] = $_POST["uyelik"];
            $_SESSION["konu"] = $_POST["uyelik"];
        } else {
            if (!empty($_POST["diger"])) {
                $_SESSION["diger"] = $_POST["diger"];
                $_SESSION["konu"] = $_POST["diger"];
            }
        }
    }
}
if (!empty($_POST["gun"])) {
    $_SESSION["gun"] = $_POST["gun"];
    $_SESSION["ay"] = $_POST["ay"];
    $_SESSION["yil"] = $_POST["yil"];
    $_SESSION["dogumTarihi"] = $_POST["gun"] . " / " . $_POST["ay"] . " / " . $_POST["yil"];
} else {
    $_SESSION["dogumTarihi"] = "Girilmedi/Bilinmiyor";
}
if (!empty($_POST["mesaj"])) {
    $_SESSION["mesaj"] = $_POST["mesaj"];
}

if (!empty($_POST["dosyaSec"])) {
    $_SESSION["dosyaSec"] = $_POST["dosyaSec"];
} else {
    $_SESSION["dosyaSec"] = "Dosya yüklenmedi!";
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
                <a class="nav-link" href="../anasayfalar/mirasimiz.php">MİRASIMIZ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../anasayfalar/ozgecmisim.php">ÖZGEÇMİŞİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../anasayfalar/iletisim.php">İLETİŞİM</a>
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
                        <a class="dropdown-item" href="son_gonderilen_mesaj.php">Son gönderilen mesaj</a>  
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="hoscakalin.php">Çıkış</a>    
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
        <br><br>
        <div class="tik-isareti">
            <svg class="bi bi-check-all" width="7em" height="7em" viewBox="0 0 16 16" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M12.354 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L5 10.293l6.646-6.647a.5.5 0 01.708 0z"
                      clip-rule="evenodd"/>
                <path d="M6.25 8.043l-.896-.897a.5.5 0 10-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 00.708 0l7-7a.5.5 0 00-.708-.708L8.5 10.293l-.543-.543-.707.707z"/>
            </svg>
        </div>
        <h1 class="mesaj-baslik">Mesajınız başarıyla iletildi.</h1>
        <hr class="border-light">


        <div class="container">
            <table class="table table-bordered table-striped table-hover table-light">
                <thead class="thead-dark tablo-tazi-tipi">
                <tr>
                    <th scope="col">Bilgi Türü</th>
                    <th scope="col">Gönderilen Bilgiler</th>
                </tr>
                </thead>
                <tbody class="tablo-elemanlari-tazi-tipi">
                <tr>
                    <th scope="row">Adı</th>
                    <td><?php echo $_SESSION["ad"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Soyadı</th>
                    <td><?php echo $_SESSION["soyad"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">e-Posta</th>
                    <td><?php echo $_SESSION["eposta"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Üyelik Durumu (Üye mi?)</th>
                    <td><?php echo $_SESSION["uye"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Doğum Tarihi</th>
                    <td><?php echo $_SESSION["dogumTarihi"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Mesaj Türü</th>
                    <td><?php echo $_SESSION["mesajTuru"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Konu</th>
                    <td><?php echo $_SESSION["konu"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Mesaj</th>
                    <td><?php echo $_SESSION["mesaj"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Yüklenen Dosya</th>
                    <td><?php echo $_SESSION["dosyaSec"]; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>
</html>