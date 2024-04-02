<?php

echo "<table border=5 cellspacing=7 cellpadding=15 align=center>";
echo "<tr><th>Blok</th><th>Daire No</th><th>Ad</th><th>Cinsiyet</th><th>Telefon</th><th>Giriş Tarihi</th></tr>";

$db = new PDO("mysql:host=localhost;dbname=projesitesi;charset:utf8","root","");

foreach($list = $db->query("SELECT * FROM ablok",PDO::FETCH_BOTH) as $liste)
echo "<tr><td>A Blok</td><td>$liste[daire_no]</td><td>$liste[ad]</td><td>$liste[cinsiyet]</td><td>$liste[telefon]</td><td>$liste[giris_tarihi]</td></tr>";

foreach($list = $db->query("SELECT * FROM bblok",PDO::FETCH_BOTH) as $liste)
echo "<tr><td>B Blok</td><td>$liste[daire_no]</td><td>$liste[ad]</td><td>$liste[cinsiyet]</td><td>$liste[telefon]</td><td>$liste[giris_tarihi]</td></tr>";

foreach($list = $db->query("SELECT * FROM cblok",PDO::FETCH_BOTH) as $liste)
echo "<tr><td>C Blok</td><td>$liste[daire_no]</td><td>$liste[ad]</td><td>$liste[cinsiyet]</td><td>$liste[telefon]</td><td>$liste[giris_tarihi]</td></tr>";

foreach($list = $db->query("SELECT * FROM dblok",PDO::FETCH_BOTH) as $liste)
echo "<tr><td>D Blok</td><td>$liste[daire_no]</td><td>$liste[ad]</td><td>$liste[cinsiyet]</td><td>$liste[telefon]</td><td>$liste[giris_tarihi]</td></tr>";

echo "<tr><td colspan=6 align=center><a style='text-decoration:none;' href='anasayfa.html'>ANASAYFA</a></td></tr>";
echo "</table>";
?>