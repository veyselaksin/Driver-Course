<link rel="stylesheet" href="css/index.css">

<?php
include 'sql/connect.php';
$id= @$_GET['id'];
 if($_POST){
    $sifre=$_POST['ysifre'];
    
   if($_POST['ysifre']==$_POST['esifre']){
    $guncelle=mysqli_query($connect,"UPDATE kayit SET sifre='$sifre' WHERE id='$id'");
    echo "Bilgilerin güncellendi yeni bilgilerini görmek için öncelikle çıkış yapmalısın. <br><br>";
    echo "<a href='session/exit.php' class='sifre' style='background-color:dodgerblue; color:white; padding:6px; padding-top:8px; padding-bottom:8px;'>Çıkış Yap</a> <br><br><br>";
   }
   else{
    echo "Yeni şifreler uyuşmuyor.. <br>";
    echo "<a href='sifredegistir.php'>Geri Dön</a>";
   }


}else{
    $bul =mysqli_query($connect,'SELECT * FROM kayit');
    $row=mysqli_fetch_array($bul);
    extract($row);
echo "
<div >
<form action='' method='post' style='width:320px;'>
           Eski Şifren:<span class='sabit'><input type='password' name='esifre' value='".$sifre."'></span><br><br>
           Yeni Şifreni gir:<span class='sabit'><input type='password' name='ysifre''></span><br><br>
           Yeni Şifreni tekrar gir:<span class='sabit'><input type='password' name='ysifre2''></span><br><br>
           <button type='submit' name='buton'>Şifreyi Güncelle</button>
         </form>
</div>";
}
?>