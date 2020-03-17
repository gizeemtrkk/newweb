<?php

error_reporting(0);
session_start();

$db = new PDO("mysql:host=localhost;dbname=proje", 'root','');

$email=$_POST['email'];
$sifre=$_POST['sifre'];

if(!$email || !$sifre)
	die("boş alan bırakmayınız!"); 

$giris = $db -> query("select * from kullanici where email='$email' and sifre= '$sifre'") ->fetch();

if($giris){	
	
	$_SESSION['oturum']= $giris;
	
	
	//$giris['yetki_id']); = yetki_id yi almak için bu ifadeyi kullanıcaz
	
	if($giris['yetki_id']==1) //admin için yetki_id = 1 tanımladım
	{
		echo "admin girişi"; 
		header("Location: #.php");// buraya admin girdiğinde hangi sayfaya yönlendireceğimizi yazıcaz
	}
	else if($giris['yetki_id']==2) // yetkili için yetki_id = 2 tanımladım
	{
		echo "yetkili girişi"; //buraya yetkili girdiğinde hangi sayfaya yönlendireceğimizi yazıcaz
	}
	else
	{
		echo "kullanici girişi"; //buraya kullanıcı girdiğinde hangi sayfaya yönlendireceğimizi yazıcaz
		header("Location:anasayfa.php");
	}
	
		
	
		
}
else
	echo "kullanıcı yok";

?>