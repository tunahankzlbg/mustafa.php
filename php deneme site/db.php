<?php
$db = mysqli_connect('localhost', 'root', '');
$db_sec = mysqli_select_db($db, "uye_kayit");
$veritabani = new PDO("mysql:host=localhost;dbname=uye_kayit", "root", "");
?>