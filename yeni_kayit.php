<?php
error_reporting(0);
$blok=$_POST["blok"];
$daire_no=$_POST["daire_no"];
$ad=$_POST["ad"];
$cinsiyet=$_POST["cinsiyet"];
$tel=$_POST["tel"];
$tarih=$_POST["giris_tarihi"];

$db=new PDO("mysql:host=localhost;dbname=projesitesi;charset=utf8","root","");
switch($blok)
{case "ablok":
	$ekle=$db->query("INSERT INTO ablok (daire_no,ad,cinsiyet,telefon,giris_tarihi) values('$daire_no','$ad','$cinsiyet','$tel','$tarih')");
	break;
case "bblok":
	$ekle=$db->query("INSERT INTO bblok (daire_no,ad,cinsiyet,telefon,giris_tarihi) values('$daire_no','$ad','$cinsiyet','$tel','$tarih')");
	break;
case "cblok":
	$ekle=$db->query("INSERT INTO cblok (daire_no,ad,cinsiyet,telefon,giris_tarihi) values('$daire_no','$ad','$cinsiyet','$tel','$tarih')");
	break;
case "dblok":
	$ekle=$db->query("INSERT INTO dblok (daire_no,ad,cinsiyet,telefon,giris_tarihi) values('$daire_no','$ad','$cinsiyet','$tel','$tarih')");
	break;
	default:
	echo "Boş geçilemez";
}
if ($ekle) echo "<script>alert('Kayıt yapıldı.');</script>";
else echo "<script>alert('Kayıt yapılamadı.');</script>";
?>