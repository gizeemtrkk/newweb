<?php
session_start();
ob_start();
?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <title>25 LİTRE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />


</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong></strong></li>
              <li>Jandarma Komando Er, Cihangir Mahallesi Şehit Jandarma, J. Kom. Er Hakan Öner Sk. No:1, 34310 Avcılar/İstanbul</li>
              <li>Bizi Arayın! <i class="icon-phone"></i> 0531 498 28 00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Beni tıkla!" data-target=".hidden-top"><i></i>Aç</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Kayıt Ol</a></li>
                <li><a href="#mySignin" data-toggle="modal">Oturum Aç</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">
Kayıt <strong>Ol</strong></h4>
              </div>
              <div class="modal-body">
                <form action="kayit.php" method="post" name="arama" class="form-horizontal" style="height: 600px;">
                  
                  <div class="control-group">
                    <label class="control-label" for="inputAd">Adınız</label>
                    <div class="controls">
                      <input type="text" id="inputAd" placeholder="Ad" name="ad">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSoyad">Soyadınız</label>
                    <div class="controls">
                      <input type="text" id="inputSoyad" placeholder="Soyad" name="soyad">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputTc">T.C Kimlik Numaranız</label>
                    <div class="controls">
                      <input type="text" id="inputTc" placeholder="Tc" name="tc">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">E-mail</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Şifre</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Şifre" name="sifre">
                    </div>
                  </div>
              
                  <div class="control-group">
                    <label class="control-label" for="inputSignupSayacNo">Sayac No</label>
                    <div class="controls">
                      <input type="text" id="inputSignupSayacNo" placeholder="Sayaç No" name="fatura_id">
                    </div>
                  </div>
                 
                    <div class="control-group">
                    <label class="control-label" for="inputSignupİl" >İl :</label>
                    <div class="controls">
                      <select name="il" onchange="set_player()">
    <option selected="selected" style="background-color:#FFCC00;">Lütfen Seçiniz</option>
   
    <option value="İstanbul">İstanbul</option>
    
    </select> </td>
    </tr><br><td>İlçe:</td><td><br>
    <select name="ilce">
    <!--<option>Önce İl Seçiniz</option>-->
    <?php $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
    $listele = $db->query("SELECT * FROM ilce", PDO::FETCH_ASSOC);
    if ( $listele->rowCount() )
                            {
                                foreach( $listele as $gelenveri )
                                {
                                    echo  "<option value=".$gelenveri['ilce_id'].">".$gelenveri['ilce']."</option>";
                                }
                            }
    ?>
    </select>
    </td></tr>
    <tr>
      <td>&nbsp;</td>
      
                    </div>
                  </div>
                      <div class="control-group">
                    <label class="control-label" for="inputSignupMahalle">Mahalle :</label>
                    <div class="controls">
                      <select name="mahalle">
    <!--<option>Önce İl Seçiniz</option>-->
    <?php $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
    $listele = $db->query("SELECT * FROM mahalle", PDO::FETCH_ASSOC);
    if ( $listele->rowCount() )
                            {
                                foreach( $listele as $gelenveri )
                                {
                                    echo  "<option value=".$gelenveri['mah_id'].">".$gelenveri['mahalle']."</option>";
                                }
                            }
    ?>
    </select>
                    </div>
                  </div>
                    <div class="control-group">
                    <label class="control-label" for="inputSignupSokak">Sokak :</label>
                    <div class="controls">
                      <select name="mahalle">
    <!--<option>Önce İl Seçiniz</option>-->
    <?php $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
    $listele = $db->query("SELECT * FROM sokak", PDO::FETCH_ASSOC);
    if ( $listele->rowCount() )
                            {
                                foreach( $listele as $gelenveri )
                                {
                                    echo  "<option value=".$gelenveri['sokak_id'].">".$gelenveri['sokak']."</option>";
                                }
                            }
    ?>
    </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupNo">No :</label>
                    <div class="controls">
                      <input type="text" id="inputSignupNo" placeholder="No" name="no">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupDaire">DaireNo :</label>
                    <div class="controls">
                      <input type="text" id="inputSignupDaire" placeholder="Daire" name="daire">
                    </div>
                  </div>

                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn" value="kayit" onclick="window.alert('Kaydınız başarıyla gerçekleşmiştir. Lütfen oturum açın :)     ');">Kayıt Ol</button>
                    </div>
                    <p class="aligncenter margintop20">
                      
Zaten hesabınız var mı? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Oturum Aç</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Hesabınıza giriş <strong>yapın</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="giris1.php" method="post">
                  <div class="control-group">
                    <label class="control-label" for="inputText">E-posta Adresi</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="E-posta" name="email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Şifre</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Şifre" name="sifre">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Oturum Aç</button>
                    </div>
                    <p class="aligncenter margintop20">
                      
Parolanızı mı unuttunuz? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sıfırla</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Sıfırlayın <strong>şifrenizi</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Şifreyi Sıfırla</button>
                    </div>
                    <p class="aligncenter margintop20">
                      
Şifrenizi gelen kutunuza nasıl sıfırlayacağınıza ilişkin talimatlar göndereceğiz.
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="logo.png" alt="" class="logo" style="width: 48px; margin-left: 70px; " /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Anasayfa<i ></i></a>
                     
                    </li>
                    <li class="dropdown">
                      <a href="galeri.php">Galeri<i ></i></a>
                      </li>
                   <li class="dropdown active">
                      <a href="hakkimizda.php">Hakkımızda <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="yorum.php">Yorumlarınız</a></li>
                        
                      </ul>
 </li>
 
                    <li>
                      <a href="iletisim.php">İletişim </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="img/slides/nivo/bg-1.png" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="img/slides/nivo/bg-2.png" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="img/slides/nivo/bg-3.png" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2> <strong>Yarının Suyu</strong></h2>
                  <p>
                    Türkiye’de hanehalkı su tüketim oranı toplama göre gün geçtikçe artış göstermektedir. 2016 yılında; %10 olan hane halkı tüketim payının; 2023 yılında artan nüfus ile %16 seviyesine çıkması beklenmektedir.
                  </p>
                  
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2> <strong>25 LİTRE</strong></h2>
                  <p>
                    Her gün sadece 25 litre su ile yaşamak zorunda olduğunuzu düşünün. Su krizi, dünyanın en büyük metropollerini tehdit ediyor. 25 Litre belgeseli; geleceğin İstanbul’unda olası bir susuzluğu ele alırken, günümüzde bu karanlık tabloyu değiştirmenin yollarını Gökhan Özoğuz rehberliğinde arıyor.
                  </p>
                 
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2> <strong></strong></h2>
                  <p>
                    Evrendeki hayatın varlığı sudur. Güneş ısısı suyu etkileyerek buharlaşmasını sağlar ve ısınarak buharlaşan su damlacıkları bulutlar şeklinde atmosferde kümelenir. Buharlaşarak oluşan bu kümeler yeterli derecede büyüklüğe gelince yağmur, kar ve dolu şeklinde yeryüzüne inerek yaşamın devam etmesini sağlarlar. Bu doğa olayına yağış denir ve suyun toprakla buluşması bu süreçte gerçekleşir.
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
             
              
              
              
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading"> <strong>25 LİTRE</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Su Kullanım" href="img/works/full/bir.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/bir.png" alt="Bu gösterge, içme suyu, sanayi ve tarım sektörlerinin su ihtiyacının karşılanması amacıyla tatlı su kaynaklarının (yüzey ve yeraltı) kullanımını göstermektedir. Su kullanım indeksi ise (WEI), tatlı sulardan çekilen ortalama yıllık toplam su miktarının ülke seviyesinde ortalama toplam yıllık yenilenebilir tatlı su kaynaklarına bölünmesi ile elde edilir ve yüzdelik oran olarak ifade edilir.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Su Ayak İzi" href="img/works/full/iki.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/iki.jpg" alt="Günümüzde yaşanan küreselleşme süreci, hızlı nüfus artışı, kentleşme ve iklim değişikliği etkileri göz önünde bulundurulduğunda, tatlı su kaynaklarının
                    miktarı ve farklı sektörler arasındaki uygun paylaşımı, karar vericilerin en
                    fazla üzerinde durduğu konulardan biri haline gelmiştir">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sulak Alanlar" href="img/works/full/üç.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/üç.jpg" alt="Türkiye’de 14 Ramsar Alanı, 53 Ulusal Öneme Haiz Sulak Alan, 9 Mahalli Öneme Haiz Sulak Alan bulunmaktadır. Diğer sulak alanlarımızdaki tescil çalışmaları Doğa Koruma ve Milli Parklar Genel Müdürlüğünce devam etmektedir.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="SU" href="img/works/full/sekiz.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/sekiz.jpg" alt="Su; Dünya'da bol miktarda bulunan ve hayat için vazgeçilmez olan, kokusuz ve tatsız bir kimyasal bileşik. ">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web" >
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="25 Litre" href="img/works/full/beş.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/beş.jpg" alt=" 25 Litre belgeseli; geleceğin İstanbul’unda olası bir susuzluğu ele alırken, günümüzde bu karanlık tabloyu değiştirmenin yollarını Gökhan Özoğuz rehberliğinde arıyor.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon" style="margin-top: -280px;">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Yarının Suyu" href="img/works/full/altı.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/altı.jpg" alt="Yarının suyunu kurtarmak için harekete geçme vakti. ">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator" style="margin-top: -280px;">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Kullanmıyorsan Kapat!" href="img/works/full/yedi.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/yedi.png" alt="Musluğu Açık Bırakmayın
Her gün sebzelerimizi elde yıkamak yerine, su dolu bir kapta yıkarsanız, çok daha az su tüketirsiniz. 4 kişilik bir aile bu yöntemle yılda ortalama 18 ton su kurtarabilir.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web" style="margin-top: -280px;">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="25 LİTRE SU ile yaşamak" href="img/works/full/dört.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/thumbs/dört.jpg" alt="Her gün sadece 25 litre su ile yaşamak zorunda olduğunuzu düşünün.">
                  </li>
                  <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3" style="margin-left:250px;">
            <div class="widget">
              <h5 class="widgetheading">Sayfalara Göz At</h5>
              <ul class="link-list">
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a href="galeri.php">Galerimizi Keşfedin</a></li>
                <li><a href="iletisim.php">Bizimle İletişime Geçin</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              
            </div>
          </div>
          <div class="span3">
            <div class="widget">
            
              <div class="flickr_badge">
                
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3" style="margin-left:200px;">
            <div class="widget">
              <h5 class="widgetheading">Bizimle İletişime Geçin</h5>
              <address>
								<strong>Jandarma Komando Er, Cihangir Mahallesi  </strong><br>
                 Şehit Jandarma, J. Kom. Er Hakan Öner Sk. No:1, 34310<br>
                Avcılar/ İstanbul
					 		</address>
              <p>
                <i class="icon-phone"></i> 0531 498 28 00 <br>
                <i class="icon-envelope-alt"></i> 25litreproje@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>© Copyright 2019  Tüm Hakları Saklıdır.</span>
                </p>
                <div class="credits">
                  
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="https://www.facebook.com/25-Litre-106823947468731/" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="https://twitter.com/Litre25" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>


                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
<script type="text/javascript">

//var ist           = new Array("Adalar", "Bağcılar", "Bahçelievler", "Bakırköy", "Beşiktaş", "Beykoz", "Beyoğlu", "Büyükçekmece", "Çatalca", "Eminönü", "Esenler", "Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu");

 
 function set_player() {
 //var select_il = document.arama.il;
  var select_ilce = document.arama.ilce;

  var selected_il = select_il.options[select_il.selectedIndex].value;
 
  select_ilce.options.length=0;
  
  if (selected_il == "İstanbul"){
    for(var i=0; i<ist.length; i++)
    select_ilce.options[select_ilce.options.length] = new Option(ist[i]);
  }
  

}
</script>
</body>
</html>
