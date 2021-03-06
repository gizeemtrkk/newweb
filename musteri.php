<?php

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
              
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                
              </div>
              <div class="modal-body">
              
               
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="anasayfa.php"><img src="logo.png" alt="" class="logo" style="width: 48px; margin-left: 70px; " /></a>
              
            </div>
          </div>
           <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="anasayfa.php">Anasayfa<i ></i></a>
                     
                    </li>
                    <li class="dropdown">
                      <a href="gal.php">Galeri<i ></i></a>
                      </li>
                    <li class="dropdown">
                      <a href="hakkimda.php">Hakkımızda </a>
                    </li>
 
                    <li>
                      <a href="ilet.php">İletişim </a>
                    </li>
                     <li class="dropdown">
                      <a href="#">Hesabım <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="kullanici.php">Kullanıcı Bilgilerim</a></li>
                        <li><a href="musteri.php">Müşteri Hizmetleri</a></li>
                       <form action="cikis.php"> <li><a href="cikis.php">Çıkış Yap</a></li></form>
                      </ul>
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
              <h2> Müşteri Hizmetleri</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="anasayfa.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Müşteri Hizmetleri</a></li>
              
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
            
<h2>Ne Kadar Su Harcadım?</h2>   <br><br>    
<form>
  İlk Okuma :<select name="ilktarih" style="margin-left: 10px"> 
    <?php 
  $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
   $listele = $db->query("SELECT * FROM tarih", PDO::FETCH_ASSOC);
   if ( $listele->rowCount() )
 {  
  foreach( $listele as $gelenveri )
 {
  echo  "<option value=".$gelenveri['tarih_id'].">".$gelenveri['faturaBas']."</option>";
 }
 }
 ?></select><br><br>
 Son Okuma :<select name="sontarih"> <?php 
  $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
   $listele = $db->query("SELECT * FROM tarih", PDO::FETCH_ASSOC);
   if ( $listele->rowCount() )
 {  
  foreach( $listele as $gelenveri )
 {
  echo  "<option value=".$gelenveri['tarih_id'].">".$gelenveri['faturaSon']."</option>";
 }
 }
 ?>
   
 </select>
<br><br><br>

<input type="button" value="Göster" onclick="window.alert('Bu ay 90 Litre su harcadınız...');"/>
<button type="submit" value="Tümünü Göster" onclick="window.alert('2020-01-01 - 2020-02-01 tarihleri arasında 100 Litre su harcadınız. 2020-02-01 - 2020-03-01 tarihleri arasında 90 Litre su harcadınız. 2020-03-01 - 2020-04-01 tarihleri arasında 98 Litre su harcadınız. 2020-04-01 - 2020-05-01 tarihleri arası 180 Litre su harcadınız.')">Tümünü Göster</button><br><br> <br><br>  <br><br>  
<h2>Ödüllerimi Gör </h2>   <br><br>  
<form>
  Başlangıç Tarihi  :<select name="ilktarih" style="margin-left: 10px"> <?php 
  $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
   $listele = $db->query("SELECT * FROM tarih", PDO::FETCH_ASSOC);
   if ( $listele->rowCount() )
 {  
  foreach( $listele as $gelenveri )
 {
  echo  "<option value=".$gelenveri['tarih_id'].">".$gelenveri['faturaBas']."</option>";
 }
 }
 ?></select><br><br>
 Son Tarih : <select name="sontarih" style="margin-left: 45px"> <?php 
  $db = new PDO("mysql:host=localhost;dbname=proje", "root", '');
   $listele = $db->query("SELECT * FROM tarih", PDO::FETCH_ASSOC);
   if ( $listele->rowCount() )
 {  
  foreach( $listele as $gelenveri )
 {
  echo  "<option value=".$gelenveri['tarih_id'].">".$gelenveri['faturaSon']."</option>";
 }
 }
 ?></select>
   <br><br><br>

<input type="button" value="Göster" onclick="window.alert('Bu ay kazandığınız puan: 5 puan      Toplam Puanınız:9     ');"/>
<button type="submit" value="Tümünü Göster" class="buton" onclick="window.alert('2020-01-01 - 2020-02-01  tarihinde 4 puan kazandınız.                   2020-02-01 - 2020-03-01 tarihinde 5 puan kazandınız.                        2020-03-01 - 2020-04-01 tarihinde 5 puan kazandınız.                      2020-04-01 - 2020-05-01 tarihinde 1 puan kazandınız.                         Toplam Puanınız: 15')">Tümünü Göster</button><br><br> 

</form>
 </ul>
 <div class="span6" style="margin-left: 155px; margin-top: 300px;">
            <h4>Su Oranları</h4>
            <label>Vücut : %70</label>
            <div class="progress progress-info progress-striped active">
              <div class="bar" style="width: 70%">
              </div>
            </div>
            <label>Sebzeler : %90</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 90%">
              </div>
            </div>
            <label>Meyve : %40</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 40%">
              </div>
            </div>
            
          </div>
            <div class="clearfix">
            </div>
            <div class="row">
              
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
                <li><a href="hakkimda.php">Hakkımızda</a></li>
                <li><a href="gal.php">Galerimizi Keşfedin</a></li>
                <li><a href="ilet.php">Bizimle İletişime Geçin</a></li>
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

</body>

</html>
