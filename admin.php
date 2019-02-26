<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Giriş Paneli</title>
    <link rel="stylesheet" href="/css/w3.css">
    <style media="screen">
      .div{
        border:1px solid #333333;
        background-color: lightgrey;
        width: 600px;
        height: device-height;
        margin:auto;
        margin-top: 200px;
        font-size: 20px;
        border-radius: 5px;
      }
      h3{
        margin-top: 0px;
        padding:10px;
        background-color: #333333;
        color:white;
        text-align: center;
        font-size: 20px;
        font-family: sans-serif;
      }
      span{
        width: 300px;

      }
      .spanprop{
        float:right !important;

      }
      input{
        font-size: 16px;
        border-radius: 5px;
        border:1px solid black;

      }
      button{
        font-size: 18px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid grey;
        background-color:dodgerblue;
        color:white;
      }
    </style>
  </head>
  <body>
    <div class="div">
      <h3>Giriş Paneli</h3>
      <div style="padding-left:125px;">
        <form  action="" method="post">
          Kullanıcı Adı: <span class="spanprop"> <input type="text" name="k_adi"></span><br><br>
          Şifre: <span class="spanprop"> <input type="password" name="sifre"></span><br><br>
          <span class="spanprop"> <button type="submit" name="button">Giriş Yap</button> </span><br><br>
        </form>
      </div>

    </div>
    <?php
      session_start();
      include("sql/connect.php");
      $bul=mysqli_query($connect,"SELECT * FROM panel");
      $row = mysqli_fetch_assoc($bul);
      if(isset($_POST['button'])){
      $k_adi=$_POST['k_adi'];
      $sifre=$_POST['sifre'];
      if($k_adi==$row['username']){
      if($k_adi== $row['username'] && $sifre==$row['password']){
        $_SESSION['k_adi']=$row['username'];
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
  </body>
</html>