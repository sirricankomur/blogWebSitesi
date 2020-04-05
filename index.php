<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hakkında</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<nav class="navbar navbar-expand-lg nav navbar-dark bg-dark fixed-top">
    <a class="navbar-brand align-items-center d-flex ml-5" href="anasayfalar/hakkinda.php">
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
                <a class="nav-link active" href="anasayfalar/hakkinda.php">HAKKINDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anasayfalar/sehrim.php">ŞEHRİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anasayfalar/mirasimiz.php">MİRASIMIZ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anasayfalar/ozgecmisim.php">ÖZGEÇMİŞİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anasayfalar/iletisim.php">İLETİŞİM</a>
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
                        <a class="dropdown-item" href="altsayfalar/son_gonderilen_mesaj.php">Son gönderilen mesaj</a>  
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="altsayfalar/hoscakalin.php">Çıkış</a>    
                    </div>
                    </button>    
                </div>
            </li>
html;

            } else {
                echo <<<html
            <li class="nav-item">
                 <a href="anasayfalar/giris.html">
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
        <h1>Bloguma Hoşgeldiniz.</h1>
        <br>
        <?php
        if (isset($_SESSION["kullaniciAdi"])) {
            echo <<<html
        <h3 class="hosgeldiniz-yazi-tipi">Sayın,  
html;
            echo $_SESSION["kullaniciAdi"];
            echo <<<html
                 </h4>
html;

        } else {
            echo <<<html
            <a href="anasayfalar/giris.html" class="btn btn-navbar btn-lg">GİRİŞ YAPIN</a>
html;
        }
        ?>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <h2>Ben kimim?</h2>
            <p>Adım Sırrı Can, soyadım Kömür. 1997 yılında Adıyaman'da doğdum. </p>
            <p>Kendimi bildim bileli bilim aşığıydım. Böceklerle oynadım, insanları gözlemledim
                ve belgeselleri hep
                sevdim.
                Kırık olan araçları tamir etmeyi, yenilik icat eden, sıradışı insanlarla tanışmayı ve sohbet etmeye
                hep yöneldim.</p>
            <p>6 yaşında babamın göndermesi ile basketbola başladım. Çok sevmiştim ve devam ettim. 12 yaşıma
                kadar
                12 Dev Adam basketbol kursuna gittim. 11 yaşında 12 Dev Adam seçmelerinde ilk 12'ye girdim ve ilk
                turnuvalar serüvenine başlamış oldum. Artık 12 Dev Adam Basketbol takımındaydım. Turnuva serüvenim
                Gaziantep ile başlayıp Güneydoğu Anadolu, Doğu Anadolu'da bir kaç şehre turnuvalara gittim.
                12 Dev Adam serüvenim bitti ve Adıyaman İl Özel İdare Basketbol Takımına pivot olarak transfer oldum. 1
                sene
                burada oynadıktan sonra Adıyaman Spor'un Yaman Spor Takımında pivot olarak transfer oldum. Burada da 1
                sene
                oynadıktan sonra basketbolu bırakmak zorunda kaldım. Basketbol oynadığım sıralarda okul futbol ve
                basketbol takımlarında oynadım. Futbol takımında 3 sene boyunca kalecilik yaptım. Lise son yılda
                bir arkadaşımla beraber kapanan okul basketbol takımını yeniden kurduk ve 10 kişiyi eğittik ardından
                turnuvalara katıldık. Sonrası üniversite hayatı...
            </p>
            <h3>Hobilerim</h3>
            <ul>
                <li class="liste-yazi-tipi"><span class="font-weight-bold">Kitap seslendirmesi</span> yapmak benim için
                    yeri ayrı olan bir
                    tutku.
                </li>
                <li class="liste-yazi-tipi">Sağlık nedenlerimden dolayı çok oynayamasam da <span
                        class="font-weight-bold">basketbol</span> hâlâ
                    tutkulu olarak oynuyorum.
                </li>
                <li class="liste-yazi-tipi">Yaptığım en iyi aktivite ve vazgeçilmezim <span class="font-weight-bold">meditasyon yapmak</span>.

                </li>
            </ul>
        </div>
        <div class="col-lg-4 col-sm-12">
            <br><br><br><br><br>

            <figure class="figure ">
                <img src="img/Gaziantep12DevAdamEgitim.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
                <figcaption class="figure-caption text-center">Gaziantep 12 Dev Adam Eğitimi</figcaption>
            </figure>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h3>Katıldığım Etkinlikler</h3>
            <table class="table table-striped table-hover">
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
        <div class="col-4">
            <br><br><br><br><br>

            <figure class="figure">
                <img src="img/12DevAdamLogo.jpeg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            </figure>
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

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>