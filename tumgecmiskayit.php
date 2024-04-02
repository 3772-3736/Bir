<?php
$db = new PDO("mysql:host=localhost;dbname=projesitesi;charset:utf8","root","");

echo "<table border=5 cellspacing=7 cellpadding=15 align=center>";
echo "<tr><th>Blok</th><th>Daire No</th><th>Ad</th><th>Cinsiyet</th><th>Telefon</th><th>Giriş Tarihi</th><th>Çıkış Tarihi</th></tr>";

foreach($list = $db->query("SELECT * FROM cikanlar",PDO::FETCH_BOTH) as $liste)
echo "<tr><td>$liste[blok]</td><td>$liste[daire_no]</td><td>$liste[ad]</td><td>$liste[cinsiyet]</td><td>$liste[telefon]</td><td>$liste[giris_tarihi]</td><td>$liste[cikis_tarihi]</td></tr>";

echo "<tr><td colspan=7 align=center><a style='text-decoration:none;' href='anasayfa.html'>ANASAYFA</a></td></tr>";
echo "</table>";
?>