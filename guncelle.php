<?php

error_reporting(0);
session_start();

$db = new PDO("mysql:host=localhost;dbname=proje", 'root','');

$email=$_POST['email'];
$sifre=$_POST['sifre'];
$yeniSifre = $_POST['yeniSifre'];

if(!$email || !$sifre || !$yeniSifre)
	die("boş alan bırakmayınız!");

$giris = $db -> query("select * from kullanici where email='$email' and sifre= '$sifre'") ->fetch();

if($giris){	
	
	$_SESSION['giris']= $giris;
	
	
	$giris = $db -> exec("update  kullanici set sifre='$yeniSifre'  where email='$email' and sifre= '$sifre'");
	
	
	echo "şifrenizi değiştirdiniz";
	
		
	
		
}
else
	echo "email ve şifreyi doğru girin";
header("location: kullanici.php");

?>