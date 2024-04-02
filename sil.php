<?php
$blok=$_POST["blok"];
$daire_no=$_POST["daire_no"];

$db = new PDO("mysql:host=localhost;dbname=projesitesi;charset:utf8","root","");

foreach($list = $db->query("SELECT * FROM $blok where daire_no=$daire_no",PDO::FETCH_BOTH) as $liste)
{$bugun = date('Y-m-d');
$ekle=$db->query("INSERT INTO cikanlar (blok,daire_no,ad,cinsiyet,telefon,giris_tarihi,cikis_tarihi) values('$blok','$liste[daire_no]','$liste[ad]','$liste[cinsiyet]','$liste[telefon]','$liste[giris_tarihi]','$bugun')");
}

$sil=$db->query("delete from $blok where daire_no=$daire_no");
	
if ($sil&&$ekle) echo "<script>alert('Başarıyla Silindi.');</script>";
else echo "<script>alert('Silenemedi.');</script>";
?>