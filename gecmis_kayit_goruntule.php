<?php
$blok=$_POST["blok"];
$daire_no=$_POST["daire_no"];

echo "<table border=5 cellspacing=7 cellpadding=15 align=center>";
echo "<tr><th>Ad</th><th>Cinsiyet</th><th>Telefon</th><th>Giriş Tarihi</th><th>Çıkış Tarihi</th></tr>";

$db = new PDO("mysql:host=localhost;dbname=projesitesi;charset:utf8","root","");

foreach($list = $db->query("SELECT * FROM cikanlar where daire_no=$daire_no and blok='$blok'",PDO::FETCH_BOTH) as $liste)
echo "<tr><td>$liste[ad]</td><td>$liste[cinsiyet]</td><td>$liste[telefon]</td><td>$liste[giris_tarihi]</td><td>$liste[cikis_tarihi]</td></tr>";
echo "<tr><td colspan=5 align=center><a style='text-decoration:none;' href='anasayfa.html'>ANASAYFA</a></td></tr>";
echo "</table>";
