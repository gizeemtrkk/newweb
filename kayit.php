 </head>
<body id ="cursors" class="imlec"  onload="hosGeldiniz()" >

<link rel="stylesheet" type="text/css" href="index.php">

   </body> 
<?php


$ad=$_POST["ad"];
$soyad=$_POST['soyad'];
$tc=$_POST['tc'];
$email=$_POST['email'];
$sifre=$_POST['sifre'];
$fatura_id=$_POST['fatura_id'];
$ilce=$_POST['ilce'];
$mahalle_id=$_POST['mahalle_id'];
$sokak_id=$_POST['sokak_id'];
$no=$_POST['no'];
$daire=$_POST['daire'];


$db = new PDO("mysql:host=localhost;dbname=proje", 'root','');



$ekle = $db->exec("INSERT INTO kullanici (ad,soyad,tc,email,sifre,fatura_id,ilce_id,mah_id,sokak_id,no,daire)
VALUES ( '$ad', '$soyad','$tc','$email','$sifre','$fatura_id','$ilce','$mahalle_id','$sokak_id','$no','$daire')"); //ekleme kodu



header("Location: index.php");

?>