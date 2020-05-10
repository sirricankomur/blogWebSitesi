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
                <a class="nav-link active" href="sehrim.php">ŞEHRİM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mirasimiz.php">MİRASIMIZ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ozgecmisim.php">ÖZGEÇMİŞİM</a>
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

<header>
    <div id="sehrimSlide" class="carousel slide slide-ekrani" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#sehrimSlide" data-slide-to="0" class="active"></li>
            <li data-target="#sehrimSlide" data-slide-to="1"></li>
            <li data-target="#sehrimSlide" data-slide-to="2"></li>
            <li data-target="#sehrimSlide" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inne slide-ekrani" role="listbox">

            <div class="carousel-item active" style="background-image: url(../img/perreA2.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-baslik">Perre Antik Kenti</h1>
                    <hr class="bg-light">
                    <h3 class="alt-baslik">Perre Antik Kenti'nin tarihi nedir?</h3>
                    <br>
                    <a type="button" class="btn btn-slide"
                       href="../altsayfalar/perre_antik_kenti.php">
                        OKUMAK İÇİN TIKLA
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(../img/nemrutH2.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-baslik2">Nemrut Dağı</h1>
                    <hr class="bg-light">
                    <h3 class="alt-baslik2">Nemrut Dağı'ndaki heykellerin anlamı nedir?</h3>
                    <br>
                    <a type="button" class="btn btn-slide2"
                       href="../altsayfalar/nemrut_dagi.php">
                        OKUMAK İÇİN TIKLA
                    </a></div>
            </div>
            <div class="carousel-item" style="background-image: url(../img/cendere3.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-baslik4">Cendere Köprüsü</h1>
                    <hr class="bg-light">
                    <h3 class="alt-baslik4">Cendere Köprüsü kimin adına dikilmiştir?</h3>
                    <br>
                    <a type="button" class="btn btn-slide4"
                       href="../altsayfalar/cendere_koprusu.php">
                        OKUMAK İÇİN TIKLA
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(../img/arsemia.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-baslik3">Arsemia Örek Yeri</h1>
                    <hr class="bg-light">
                    <h3 class="alt-baslik3">Arsemia Örek Yerindeki heykellerin tarihi ne?</h3>
                    <br>
                    <a type="button" class="btn btn-slide3"
                       href="../altsayfalar/arsemia.php">
                        OKUMAK İÇİN TIKLA
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<div class="row" style="margin: 0">

    <div class="col-sm-12 col-md-6">
        <h2>1. Nemrut Dağı</h2>
        <hr class="border-dark">
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
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/nemrutH1.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Nemrut Anıtları</figcaption>
        </figure>
        <br>
        <figure class="figure">
            <img src="../img/nemrutH3.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Nemrut Anıtları</figcaption>
        </figure>
    </div>

</div>
<br>
<hr class="border-primary">
<br>-->
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>2. Arsemia Ören Yeri</h2>
        <hr class="border-dark">
        <p><span class="font-weight-bold">Arsameia Ören Yeri (Nymphaios Arsameia'sı)</span>, Kral I. Antiochos
            kitabelerinde söz edildiğine göre; Arsameia İ.Ö. 2'inci yüzyılın başlarında <span
                    class="font-weight-bold">Kommagene</span>'lerin atası
            <span class="font-weight-bold">Arsemez</span> tarafından Kahta Çayı'nın doğusunda Eski Kahta Kalesi'nin
            karşısında kurulmuş krallığın yazlık
            başkenti ve idare merkezidir.</p>
        <p>Güneydeki tören yolunda Mitras'ın kabartma steli, ayin platformu üzerinde Antiochos-Herakles tokalaşma
            steli ve bunun önünde Anadolu'nun bilinen en büyük Grekçe yazıtı vardır. Yazıtın bulunduğu yerden
            başlayan 158 metre derine inen bir tünel ile yazıtın batısında benzer bir kaya dehlizi bulunmaktadır.
            Tepe üzerindeki platformda <span class="font-weight-bold">Mithridathes Callinichos</span>'un mezar
            tapınağı ve sarayı yer almaktadır. </p>
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/arsemia.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Arsemia Ören Yeri Anıtı</figcaption>
        </figure>
        <br>
        <figure class="figure">
            <img src="../img/arsemia2.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Arsemia Ören Yeri Anıtı</figcaption>
        </figure>
    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>3. Eski Kâhta Kalesi</h2>
        <hr class="border-dark">
        <p>Nemrut Dağı Tur güzergahında olan <span class="font-weight-bold">Eski Kahta kalesi</span> üç önemli
            medeniyetin izlerini taşımaktadır. Kommagene’liler döneminde yazlık başkent olan Arsameia ile birlikte
            önemli bir idare merkezi, kale olarak inşa edilmiş, Roma’lılar döneminde geliştirilerek konumu devam
            ettirilmiştir. 1260’larda Memlukların bölgeye hakim olmasıyla kale restore edilmiş ve bugünkü son şekli
            verilmiştir. Eski Kahta‘nın Cumhuriyet dönemine kadar ilçe merkezi olarak Elazığ’a (Memuret-ül Aziz)
            bağlı kalması kalenin 1926‘lara kadar kullanıldığı anlaşılmaktadır.</p>
        <p>Kalede su yolları, sarnıç, zindan, dükkanlar, ibadet mekanları ve geniş odalar bulunmaktadır. 1970’lerde
            kazı ve kısmi restoresi yapılan kale için yeni bir restorasyon projesi ile yakın yıllarda hak ettiği
            iyileştirmeye kavuşturulmak istenmektedir.</p>
        <p>Nemrut Dağı Milli Parkı sınırlarında, Arsemia’ya yakın bir konumda yer alıyor. Arsemia kalıntılarına kuş
            uçuşu olarak 500 metre mesafede olmasına karşın yol bulunmadığından Arsemia kalıntılarının güneyinden
            dolaşmak gerekiyor. Arsemia’dan sonra, ikiye ayrılan yolda, sağ tarafa doğru ilerlediğinizde kaleyi
            görürsünüz. Kaleye doğru giden yolda mutlaka Selçuklu döneminde yapılan köprüde mola verin ve yanındaki
            kanyonu izleyin.</p>
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/kahtaKalesi2.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Kâhta Kalesi</figcaption>
        </figure>
    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>4. Cendere Köprüsü</h2>
        <hr class="border-dark">
        <p><span class="font-weight-bold">Cendere Köprüsü</span>, <span class="font-weight-bold">Roma Köprüsü</span>
            veya <span class="font-weight-bold">Septimius Severus Köprüsü</span> olarak da bilinir. Antik Cabinas
            (Cendere)
            Çayı üzerinde yer almaktadır. Köprü muhteşem bir kanyondan akan çayın iki tarafını birleştirdiği için bu
            isim verilmiştir. Kâhta İlçesi'nden Nemrut Dağı’na doğru giderken <span class="font-weight-bold">Karakuş Tümülüsü</span>’nü
            geçtikten yaklaşık 10 kilometre sonra Sincik-Kocahisar yol ayrımında bulunmaktadır. Köprü Roma
            İmparatoru Septimius Severus’un (MS 193-211) emriyle o tarihte <span
                    class="font-weight-bold">Samsat</span>’ta
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
            <span class="font-weight-bold">Caracalla</span> adına dikildiğini göstermektedir. Bu sütunun karşısında
            köprünün
            yapıldığı dönemde oğulları <span class="font-weight-bold">Geta</span> adına dikilmiş bir sütun daha
            olduğu bilinmektedir. Ancak Septimius Severus’tan sonra tahta geçen İmparator Caracalla (MS 211-217),
            kardeşi Geta’yı öldürterek Roma topraklarında Geta adına dikilen ne varsa yıktırmış, bu yıkımdan Cendere
            Köprüsü de nasibini almış ve kardeşi Geta adına dikilen sütun kaldırılmıştır.</p>
        <p>Cendere Köprüsü’nün, yapımından sonra <span class="font-weight-bold">Roma Dönemi</span>’nde değişik
            zamanlarda onarım gördüğü, köprünün korkuluk kısmında yer alan yazıtlardan anlaşılmaktadır.</p>
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/cendere1.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Cendere Köprüsü</figcaption>
        </figure>
        <br>
        <figure class="figure">
            <img src="../img/cendere2.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Cendere Köprüsü</figcaption>
        </figure>
    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>5. Karakuş Tümülüsü</h2>
        <hr class="border-dark">
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
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/karakus.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Karakuş Tümülüsü</figcaption>
        </figure>
    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>6. Perre Antik Kenti</h2>
        <hr class="border-dark">
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
            eski parlak dönemini bir daha yakalayamamıştır. Antik kentin asıl yerleşim kısmı üzerinde bugün Örenli
            Mahallesi olarak geçen ancak
            özünde köy görünümüne sahip geç dönem yerleşimi mevcuttur. Burada bulunan kaya mezarları kayalıklar
            içine oyularak yapılmıştır ve harika görünüme sahiptirler.</p>

    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/perreA2.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Perre Antik Kenti</figcaption>
        </figure>
        <br>
        <figure class="figure">
            <img src="../img/perreA1.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Perre Antik Kenti'nin İç Bölümleri</figcaption>
        </figure>

    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>7. Haydaran Kaya Mezarları</h2>

        <hr class="border-dark">
        <p> İlimiz merkez Taşgedik köyü sınırları içerisindedir. Kabartma Kommagene döneminde ana kaya üzerine
            diktörtgen bir niş içine yapılmış, güneş tanrısı Helios ile Kommagene kralı Mithridates’in karşılıklı
            ayakta durmalarını tasvir etmektedir. </p>
        <p> Kaya mezarlar ve Güneş Tanrısı Hellias ile Kral Antiochos'un tokalaşma kabartmaları vardır.</p>
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/haydaran.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Haydaran Kaya Mezarları Figürleri</figcaption>
        </figure>
    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>8. Turuş Kaya Mezarları</h2>
        <hr class="border-dark">
        <p>Adıyaman il merkezine 40 km. uzaklıkta ve Adıyaman-Şanlıurfa karayolunun 1 km. batısında yer alan Turuş
            Kaya Mezarları Roma Dönemine aittir. Mezarlar zeminden aşağıya doğru ana kaya oyularak yapıldığından
            mezarların girişine aşağıya doğru inen 10-13 basamaktan sonra ulaşılır. Bazılarının duvar ve kapı
            girişlerinde çeşitli figürlerde kabartmalar bulunmaktadır. </p>
        <p>Tamamen kaya bir tepe üzerinde Roma dönemine ait 60 kadar kaya mezarından oluşmaktadır. Bazı kaya
            mezarlarının duvarlarında çeşitli hayvan ve insan kabartmaları ile betimler yer almaktadır.</p>
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/adiyamanturuskayamezarlari.jpg" class="figure-img rounded-top img-fluid"
                 alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Turuş Kaya Mezarları</figcaption>
        </figure>
    </div>
</div>
<br>
<hr class="border-primary">
<br>
<div class="row" style="margin: 0">
    <div class="col-sm-12 col-md-6">
        <h2>9. Adıyaman'ın Yemek Kültürü</h2>
        <hr class="border-dark">
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
    </div>
    <div class="col-sm-12 col-md-6">
        <br><br><br><br>
        <figure class="figure">
            <img src="../img/cigKofte.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">Çiğ Köfte</figcaption>
        </figure>
        <br>
        <figure class="figure">
            <img src="../img/icliKofte.jpg" class="figure-img rounded-top img-fluid" alt="Görüntü görüntülenemiyor!">
            <figcaption class="figure-caption text-center">İçli Köfte</figcaption>
        </figure>
    </div>
</div>
<div class="row" style="margin: 0">
    <div class="col-12">
        <h2>10. Adıyaman'ın Nüfusu</h2>
        <hr>
        <blockquote class="blockquote text-center">
            <p class="mb-2">Türkiye İstatistik Kurumu'nun (TÜİK) hazırlamış olduğu 2017 yılı Adrese Dayalı Nüfus Kayıt
                Sistemi
                (ADNKS) sonuçlarına göre Adıyaman’ın nüfusu <span class="font-weight-bold">626465</span> kişidir.
                İlimizin il/ilçe ve belde/köy nüfus dağılımı verilmiştir.</p>
            <p>Ayrıca, 2019 yılı il ve ilçelere göre nüfus dağılımı aşağıdaki
                tabloda verilmiştir.</p>
        </blockquote>


        <div class="container">
            <table class="table table-striped table-hover table-light">
                <caption class="text-muted tablo-elemanlari-tazi-tipi">Nüfus Dağılımı</caption>
                <thead class="thead-dark tablo-tazi-tipi">
                <tr>
                    <th scope="col">İlçe/Belde</th>
                    <th scope="col" class="text-center">Köy</th>
                    <th scope="col" class="text-center">İl/İlçe Merkezleri</th>
                    <th scope="col" class="text-center">TOPLAM</th>
                </tr>
                </thead>
                <tbody class="tablo-elemanlari-tazi-tipi">
                <tr>
                    <th scope="row">Besni</th>
                    <td class="text-center">42090</td>
                    <td class="text-center">34584</td>
                    <td class="text-center">76674</td>
                </tr>
                <tr>
                    <th scope="row">Çelikhan</th>
                    <td class="text-center">7053</td>
                    <td class="text-center">8417</td>
                    <td class="text-center">15470</td>
                </tr>
                <tr>
                    <th scope="row">Gerger</th>
                    <td class="text-center">14634</td>
                    <td class="text-center">2918</td>
                    <td class="text-center">17552</td>
                </tr>
                <tr>
                    <th scope="row">Gölbaşı</th>
                    <td class="text-center">17071</td>
                    <td class="text-center">32182</td>
                    <td class="text-center">49253</td>
                </tr>
                <tr>
                    <th scope="row">Kâhta</th>
                    <td class="text-center">42926</td>
                    <td class="text-center">80935</td>
                    <td class="text-center">123861</td>
                </tr>
                <tr>
                    <th scope="row">Merkez</th>
                    <td class="text-center">48093</td>
                    <td class="text-center">260822</td>
                    <td class="text-center">308915</td>
                </tr>
                <tr>
                    <th scope="row">Samsat</th>
                    <td class="text-center">3708</td>
                    <td class="text-center">4272</td>
                    <td class="text-center">7980</td>
                </tr>
                <tr>
                    <th scope="row">Sincik</th>
                    <td class="text-center">12634</td>
                    <td class="text-center">4221</td>
                    <td class="text-center">16855</td>
                </tr>
                <tr>
                    <th scope="row">Tut</th>
                    <td class="text-center">6498</td>
                    <td class="text-center">3407</td>
                    <td class="text-center">9905</td>
                </tr>
                <tr>
                    <th scope="row">TOPLAM</th>
                    <td class="text-center">194707</td>
                    <td class="text-center">431758</td>
                    <td class="text-center">626465</td>
                </tr>
                </tbody>
            </table>

            <table class="table table-striped table-hover table-light">
                <caption class="text-muted tablo-elemanlari-tazi-tipi">Nüfus-Cinsiyet Dağılımı</caption>
                <thead class="thead-dark tablo-tazi-tipi">
                <tr>
                    <th scope="col">İlçe/Belde</th>
                    <th scope="col" class="text-center">Erkek</th>
                    <th scope="col" class="text-center">Kadın</th>
                    <th scope="col" class="text-center">TOPLAM</th>
                </tr>
                </thead>
                <tbody class="tablo-elemanlari-tazi-tipi">
                <tr>
                    <th scope="row">Besni</th>
                    <td class="text-center">38569</td>
                    <td class="text-center">38105</td>
                    <td class="text-center">76674</td>
                </tr>
                <tr>
                    <th scope="row">Çelikhan</th>
                    <td class="text-center">7960</td>
                    <td class="text-center">7540</td>
                    <td class="text-center">15500</td>
                </tr>
                <tr>
                    <th scope="row">Gerger</th>
                    <td class="text-center">8795</td>
                    <td class="text-center">8757</td>
                    <td class="text-center">19035</td>
                </tr>
                <tr>
                    <th scope="row">Gölbaşı</th>
                    <td class="text-center">24795</td>
                    <td class="text-center">24485</td>
                    <td class="text-center">49280</td>
                </tr>
                <tr>
                    <th scope="row">Kâhta</th>
                    <td class="text-center">62976</td>
                    <td class="text-center">60885</td>
                    <td class="text-center">123861</td>
                </tr>
                <tr>
                    <th scope="row">Merkez</th>
                    <td class="text-center">153396</td>
                    <td class="text-center">153519</td>
                    <td class="text-center">306915</td>
                </tr>
                <tr>
                    <th scope="row">Samsat</th>
                    <td class="text-center">4111</td>
                    <td class="text-center">3869</td>
                    <td class="text-center">7980</td>
                </tr>
                <tr>
                    <th scope="row">Sincik</th>
                    <td class="text-center">8398</td>
                    <td class="text-center">8457</td>
                    <td class="text-center">16855</td>
                </tr>
                <tr>
                    <th scope="row">Tut</th>
                    <td class="text-center">5112</td>
                    <td class="text-center">4793</td>
                    <td class="text-center">9905</td>
                </tr>
                </tbody>
            </table>
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

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/form.js"></script>
</body>
</html>