<style>
a{text-decoration:none;}
</style>
<?php 
  include 'connect.php';
  $bul=mysqli_query($connect,"SELECT * FROM kayit ");
  
  
while($row=mysqli_fetch_assoc($bul)){
  extract($row);
    echo "<div class='icerik'>
        Ad:{$ad} <br>
        Soyad:{$soyad} <br>
        Telefon Numarası:{$telefon} <br>
        E-Posta:{$eposta} <br>
        Ehliyet Sınıfı:{$esinif} <br>
        Tahsil Durumu:{$tahsil} <br> 
        <hr>
        <a href='sql/sil.php?id={$id}'>[DELETE] | </a>
        <a href='sql/guncelle.php?id={$id}'>[UPDATE]</a> <br> <br>
    </div>";
   
  }
  
?>

