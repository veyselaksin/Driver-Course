<?php 
 session_start();
 ob_start();
 include("sql/connect.php");

 $eposta = $_POST['eposta'];
 $sifre = $_POST['sifre'];
  
 $sql_check = mysqli_query($connect,"select * from kayit where eposta='".$eposta."' and sifre='".$sifre."' ") or die(mysql_error());
  $row=mysqli_fetch_array($sql_check);
 if(mysqli_num_rows($sql_check))  {
     $_SESSION["login"] = $row['ad'];
     $_SESSION["eposta"] = $eposta;
     $_SESSION["sifre"] = $sifre;
     header("Location:index.php");
 }
 else {
     if($eposta=="" or $sifre=="") {
         echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
     }
     else {
         echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
     }
 }
  

 ?>