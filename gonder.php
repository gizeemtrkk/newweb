<?php


$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$telefon=$_POST['tel'];
$mesaj=$_POST['mesaj'];

$db = new PDO("mysql:host=localhost;dbname=proje", 'root','');


$ekle = $db->exec("INSERT INTO iletisim (ad,soyad,mail,telefon,mesaj) VALUES ('$ad', '$soyad', '$mail','$telefon','$mesaj')"); //ekleme kodu


if($ekle)

{

   echo "Mesajınız Gönderildi :) ";

}
else

{

    echo "Mesajınız Gönderilmedi :( ";

}




?>