

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
      <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Beni Tıkla!" data-target=".hidden-top"><i></i>Aç</a>
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
                      <button type="submit" class="btn" value="kayit"onclick="window.alert('Kaydınız başarıyla gerçekleşmiştir. Lütfen oturum açın :)     ');">Kayıt Ol</button>
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
              <a href="index.html"><img src="logo.png" alt="" class="logo" style="width: 48px;margin-left: 70px;" /></a>
              
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
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2> <strong>GALERİ</strong></h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Galeri</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="portfolio-categ filter">
              <li class="all active"><a href="#">Albüm</a></li>
              <li class="web"><a href="#" title="">25 LİTRE Yorum</a></li>
              
            </ul>
            <div class="clearfix">
            </div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span6 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Gökhan Özoğuz" href="img/works/ful/1.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/ful/1.jpg" alt="
                    İlber Hoca'nın (İlber Ortaylı) söylediği gibi 'kuşkusuz felaketi' önlemek için her zamankinden daha sorumlu, daha mütevazi ve daha ölçülü davranmak zorundayız. Çünkü başka bir dünya yok.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span6 design" data-id="id-1" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dr. Ömer Madra" href="img/works/ful/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/ful/2.jpg" alt="Son araştırmalar, günümüzdeki birkaç onyıl içerisinde yüz milyondan fazla insanın iklim mültecisi olacağını söylüyor.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter  -->
                  <li class="item-thumbs span6 photography" data-id="id-2" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Fatih Yıldız" href="img/works/ful/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/ful/3.jpg" alt="İstanbul' da kişi başı su tüketimi; kışın 210, yazın 190 olmak üzere; günlük ortalama 190 L. ">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span6 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Eren Atak" href="img/works/ful/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/ful/4.jpg" alt="Yirmi yıl önce Türkiye' de kişi başına düşen su miktarı 4000 m3 iken şu an 1430 m3 düşmüş durumda.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span6 photography" data-id="id-4" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Emel Aliipek" href="img/works/ful/5.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/ful/5.jpg" alt="Atık suda bulunan ince partiküllerin, kimyasal reaksiyonda büyütülüp çökmesini sağlıyor; böylece su tekrar kullanılabiliyor.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span6 photography" data-id="id-5" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Prof. Dr.Levent Kurnaz" href="img/works/ful/6.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img/works/ful/6.jpg" alt="Türkiye' nin suyunun %75' ni tarım, %10'nu sanayi, %15 'ni de evlerimize harcıyoruz. ">
                  </li>
                  <!-- End Item Project -->
                </ul>
              </section>
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

var ist           = new Array("Adalar", "Bağcılar", "Bahçelievler", "Bakırköy", "Beşiktaş", "Beykoz", "Beyoğlu", "Büyükçekmece", "Çatalca", "Eminönü", "Esenler", "Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu");
var il =new array("Büyükada","Heybeliada","Burgazada","Kınalıada","Sedefadası");
 
function set_player() {
  var select_il = document.arama.il;
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
