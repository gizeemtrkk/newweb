<!doctype html>
<html class="no-js" lang="en">

<?php 
include("yonetici/head.php");
?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- error area start -->
    <div class="error-area ptb--100 text-center">
        <div class="container">
            <div class="error-content">
                <h2>404</h2>
                <p>Sayfa bulunamadı ya da yetkiniz bulunmamakta.</p>
                <a href="index.php">Anasayfaya geri dön</a>
            </div>
        </div>
    </div>
   <?php 
   include("script.php");
   ?>
</body>

</html>