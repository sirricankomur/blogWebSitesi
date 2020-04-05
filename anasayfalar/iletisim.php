<?php
session_start();
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
<nav class="navbar navbar-expand-md nav navbar-dark bg-dark fixed-top">
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
                <a class="nav-link" href="ozgecmisim.php">ÖZGEÇMİŞİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="iletisim.php">İLETİŞİM</a>
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

<div id="iletisim-form-tasarim" >
    <div class="iletisim-form">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form id="iletisimForm" name="iletisimForm"
                      action="../altsayfalar/son_gonderilen_mesaj.php" method="post"
                      onsubmit="return validate()">
                    <br><br><br>
                    <h1 class="iletisim-baslik">Bana ulaşın</h1>
                    <hr class="border-primary">
                    <div class="form-row col-12">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="ad" class="font-weight-bold"><span class="text-danger font-weight-bold">*</span>
                                Ad</label>
                            <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad">
                            <span id="adDogrulama" class="text-danger"> </span>
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="soyad" class="font-weight-bold"><span
                                        class="text-danger font-weight-bold">*</span>
                                Soyad</label>
                            <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad">
                            <span id="soyadDogrulama" class="text-danger"> </span>
                        </div>
                    </div>
                    <div class="form-row col-12">
                        <div class="form-group col-12">
                            <label for="eposta" class="font-weight-bold"><span
                                        class="text-danger font-weight-bold">*</span>
                                E-Posta</label>
                            <?php
                            if (isset($_SESSION["kullaniciAdi"])) {
                                ?>
                                <input type="text" class="form-control" id="eposta" name="eposta"
                                       placeholder="<?php echo $_SESSION["eposta"] ?>"
                                       value="<?php echo $_SESSION["eposta"] ?>"
                                       disabled>
                                <span id="epostaDogrulama" class="text-danger"> </span>
                                <?php
                            } else {
                                echo <<<html
                                <input type="text" class="form-control" id="eposta" name="eposta"
                                    placeholder="öğrenciNumarası@sakarya.edu.tr">
                                <span id="epostaDogrulama" class="text-danger"> </span>
html;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-row col-12">
                        <div class="col-sm-12 col-lg-6">
                            <label for="uyelik" class="font-weight-bold"><span
                                        class="text-danger font-weight-bold">*</span>
                                Bloguma üye misiniz?</label>
                        </div>
                        <?php
                        if (isset($_SESSION["kullaniciAdi"])) {
                            echo <<<html
            <div class="form-check col-sm-6 col-lg-3">
                    <input class="form-check-input" type="radio" name="uye" id="uyeEvet" value="Evet" checked>
                    <label class="form-check-label" for="uyeEvet">
                        Evet
                    </label>
                </div>
                <div class="form-check col-sm-6 col-lg-3">
                    <input class="form-check-input" type="radio" name="uye" id="uyeHayir" value="Hayır" disabled>
                    <label class="form-check-label" for="uyeHayir">
                        Hayır
                    </label>
                </div>
html;
                        } else {
                            echo <<<html
                 <div class="form-check col-sm-6 col-lg-3">
                    <input class="form-check-input" type="radio" name="uye" id="uyeEvet" value="Evet">
                    <label class="form-check-label" for="uyeEvet">
                        Evet
                    </label>
                </div>
                <div class="form-check col-sm-6 col-lg-3">
                    <input class="form-check-input" type="radio" name="uye" id="uyeHayir" value="Hayır" checked>
                    <label class="form-check-label" for="uyeHayir">
                        Hayır
                    </label>
                </div>
html;
                        }
                        ?>

                    </div>
                    <div class="form-row col-12">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="mesajTuru" class="font-weight-bold"><span
                                        class="text-danger font-weight-bold">*</span>
                                Mesaj Türü</label>

                            <select id="mesajTuru" name="mesajTuru" class="form-control">
                                <option selected="selected" disabled>Mesaj türünü seçiniz...</option>
                                <option>Destek almak istiyorum.</option>
                                <option>Öneri vermek istiyorum.</option>
                                <option>Teşekkür etmek istiyorum.</option>
                            </select>
                            <span id="mesajTuruDogrulama" class="text-danger"> </span>
                        </div>
                        <div class="form-group col-sm-12 col-lg-6" id="konu">
                            <label for="konu" class="font-weight-bold"><span
                                        class="text-danger font-weight-bold">*</span> Konu</label>
                            <br>
                            <div class="form-check d-inline" style="padding-right: 1.35rem">
                                <input class="form-check-input" type="checkbox" name="arayuz" id="arayuz"
                                       value="Arayüz">
                                <label class="form-check-label" for="arayuz">
                                    Arayüz
                                </label>
                            </div>
                            <div class="form-check d-inline" style="padding-right: 1.35rem">
                                <input class="form-check-input" type="checkbox" name="icerik" id="icerik"
                                       value="İçerik">
                                <label class="form-check-label" for="icerik">
                                    İçerik
                                </label>
                            </div>
                            <div class="form-check d-inline">
                                <input class="form-check-input" type="checkbox" name="uyelik" id="uyelik"
                                       value="Üyelik">
                                <label class="form-check-label" for="uyelik">
                                    Üyelik
                                </label>
                            </div>
                            <div class="form-check d-inline">
                                <input class="form-check-input" type="checkbox" name="diger" id="diger" value="Diğer">
                                <label class="form-check-label" for="diger">
                                    Diğer
                                </label>
                            </div>
                            <span id="konuDogrulama" class="text-danger"> </span>
                        </div>
                    </div>
                    <div class="row justify-content-center col-12">
                        <div class="col-12">
                            <label for="dogumTarihi" class="font-weight-bold">Doğum Tarihi</label>
                            <div class="form-row iletisim" id="dogumTarihi">
                                <div class="form-group col-sm-12 col-lg-4">
                                    <label class="sr-only" for="gun">Gün</label>
                                    <input type="text" class="form-control" id="gun" name="gun" placeholder="Gün">
                                    <span id="gunDogrulama" class="text-danger"> </span>
                                </div>
                                <div class="form-group col-sm-12 col-lg-4">
                                    <label class="sr-only" for="ay">Ay</label>
                                    <select id="ay" name="ay" class="form-control">
                                        <option selected>Ay seçiniz...</option>
                                        <option>Ocak</option>
                                        <option>Şubat</option>
                                        <option>Mart</option>
                                        <option>Nisan</option>
                                        <option>Mayıs</option>
                                        <option>Haziran</option>
                                        <option>Temmuz</option>
                                        <option>Ağustos</option>
                                        <option>Eylül</option>
                                        <option>Ekim</option>
                                        <option>Kasım</option>
                                        <option>Aralık</option>
                                    </select>
                                    <span id="ayDogrulama" class="text-danger"> </span>
                                </div>
                                <div class="form-group col-sm-12 col-lg-4">
                                    <label class="sr-only" for="yil">Yıl</label>
                                    <input type="text" class="form-control" id="yil" name="yil" placeholder="Yıl">
                                    <span id="yilDogrulama" class="text-danger"> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row col-12">
                        <div class="form-group col-12">
                            <label for="mesaj" class="font-weight-bold"><span
                                        class="text-danger font-weight-bold">*</span>
                                Mesaj</label>
                            <textarea class="form-control" id="mesaj" name="mesaj" rows="3"
                                      placeholder="Göndermek istediğiniz mesajı giriniz."></textarea>
                            <span id="mesajDogrulama" class="text-danger"> </span>
                        </div>
                    </div>
                    <div class="form-row col-12">
                        <div class="col-12 form-group">
                            <label for="dosyaSec" class="font-weight-bold">Yüklenecek dosya seç</label>
                            <input type="file" class="form-control-file" id="dosyaSec" name="dosyaSec">
                        </div>
                    </div>
                    <div class="form-row col-12">

                        <div class="col-col-sm-12 col-lg-6 form-group">
                            <button type="submit" id="submit" class="btn btn-block btn-gonder">
                                Gönder
                            </button>
                        </div>

                        <div class="col-sm-12 col-lg-6 form-group">
                            <button type="reset" name="reset" class="btn btn-block btn-temizle">
                                Temizle
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron-fluid" style="background: #140b20"></div>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/form.js"></script>
</body>
</html>