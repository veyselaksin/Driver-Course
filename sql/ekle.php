<?php
  $ekle=mysqli_query($connect,"INSERT INTO kayit(ad,soyad,telefon,eposta,sifre,esinif,tahsil) values('$ad','$soyad','$telefon','$mail','$sifre','$esinif','$tahsil')");
 ?>
