<?php
      session_start();
      include("sql/connect.php");
      $bul=mysqli_query($connect,"SELECT * FROM kayit");
      $row = mysqli_fetch_assoc($bul);
      if(isset($_POST['giris'])){
      $eposta=$_POST['email'];
      $sifre=$_POST['pass'];
      if($eposta==$row['eposta']){
      if($eposta==$row['eposta'] && $sifre==$row['sifre']){
        $_SESSION['ad']=$row['ad'];
        echo "Giriş Başarılı... Sayfaya yönlendiriliyorsunuz.".'<br>';
        header("refresh:2;url=musteriler.php");
        die("Eğer Beklemek istemiyorsanız Buraya <a href='index.php'>Tıklayınız.</a>");

      }
      else {
        echo "Hatalı giriş yaptınız";
      }
    }
    else {
      echo "Yetkisiz kullanıcı adı";
    }
  }
  ?>