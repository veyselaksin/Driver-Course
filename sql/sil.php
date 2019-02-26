<?php
include 'connect.php';
$id =@$_GET['id'];
echo "<a href='../musteriler.php'><--- Önceki Sayfaya Geri Dön </a> <br><br>";
$sil=mysqli_query($connect,"DELETE  FROM kayit WHERE id='$id'");
if($sil){
    echo "Kayıt başarılı bir şekilde silindi";
    
}
else{
  echo "Başarısız oldu";
}
?>
