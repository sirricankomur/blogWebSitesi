<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kaydol</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<nav class="navbar navbar-expand-md nav navbar-dark bg-dark fixed-top">
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
                <a class="nav-link active" href="../anasayfalar/hakkinda.php">HAKKINDA</a>
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
                <a class="nav-link" href="../anasayfalar/iletisim.php">İLETİŞİM</a>
            </li>
        </ul>
    </div>
</nav>

<div id="giris-basarili">
    <div class="hosgeldiniz">
        <div class="basarili">
            <svg class="bi bi-check-all" style="color: #0fb600" width="7em" height="7em" viewBox="0 0 16 16"
                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M12.354 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L5 10.293l6.646-6.647a.5.5 0 01.708 0z"
                      clip-rule="evenodd"/>
                <path d="M6.25 8.043l-.896-.897a.5.5 0 10-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 00.708 0l7-7a.5.5 0 00-.708-.708L8.5 10.293l-.543-.543-.707.707z"/>
            </svg>
            <h3 class="islem-basarili-yazi-tipi">Başarıyla giriş yapıldı.</h3>
        </div>
        <?php
        $ePosta = $_POST["eposta"];
        $isValidated = false;
        $_SESSION["eposta"] = $_POST["eposta"];
        function findUsername($ePosta)
        {
            $counter = strpos($ePosta, "@");
            $username = "";
            for ($i = 0; $i < $counter; $i++) {
                $username = $username . $ePosta[$i];
            }
            return $username;
        }

        function verifyEMail($ePosta)
        {
            if (filter_var($ePosta, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }

        ?>

        <?php
        $_SESSION["kullaniciAdi"] = findUsername($ePosta);
        if (verifyEMail($ePosta)) {
            ?>
            <hr class="border-white">

            <h3 class="hoscakalin-isim-yazi-tipi">Hoş geldiniz; <?php echo $_SESSION["kullaniciAdi"]; ?></h3>

            <?php
        } else {

            header("Location: giris.html");

        }
        ?>
    </div>
</div>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>
</html>