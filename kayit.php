<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
  <meta charset="utf-8" content="device-width initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/icerik.css">
  <link rel="stylesheet" href="css/kayit.css">
  <title>Aksin Sürücü Kursu</title>


  <style>
    .lradius{border-radius: 15px 0px 0px 0px;}
    .h1{border:1px solid black; line-height: 40px; background-color: #333333; color:white; margin: 0px; padding-left: 5px;}
    #ara{border-radius: 3px; height: 25px;}
    .kayit{
       border:1px solid black;
       margin-left: 30px;
       width: 400px;
       padding-right: 30px;
     }
    .giris{
      border:1px solid black;
      margin-left: 100px;
      padding-right: 30px;
      overflow: hidden;
      width: 280px;
    }
    .form input,.form select, .form textarea, .form button{
      border-radius: 15px;
      border:1px solid grey;
      font-size: 16px;
      float: left;
    }

  </style>
</head>
<body>
  <!-- cerceve-->
  <div id="cerceve">
  <div class="topinfo">

    <div class="topright">
      <img src="images/mail.png"  alt="mail: "height="20px" width="20px"><b><a href="#" id="a">info@aksinsurucu.com</a></b>
      <img src="images/phone.png" alt="phone: " height="20px"  width="20px"> 444 40 44
    </div>
    <div class="topleft">
      <a href="#" style="text-decoration:none;"><img src="images/facebook.png" alt="facebook" height="30px" width="30px" style="border-right:1px solid black"> </a>
      <a href="#"><img src="images/instagram.png" alt="instagram" height="30px" width="30px" style="border-right:1px solid black; padding-right:5px"></a>
      </div>
      <hr>
    </div>
    <div class="header" >
      <!-- Logo -->
      <div class="logo">
      <a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
      </div>
      <div id="sagresim">
        <img src="images/srcblgs.jpg" alt="Sürücü Belgesi">
      </div>
    </div>
    <!-- Menu -->
    <div >
      <ul class="menunavbar">
        <li><a class="active" href="index.php">Ana Sayfa</a></li>
        <li><a href="#news">Hakkımızda</a></li>
        <li><a href="#contact">Fiyatlarımız</a></li>
        <li><a href="#about">Kursumuzdan Karaler</a></li>
        <li><a href="#news">Ders Videoları</a></li>
        <li><a href="#news">Trafik Dersleri</a></li>
        <li><a href="#contact">Sınav Soruları</a></li>
        <li><a href="#">Çıkmış Ehliyet Soruları - Pdf </a></li>
        <li><a href="#about">İletişim</a></li>
        <li><a href="kayit.php">Online Kayıt Ol ve Giriş Yap</a></li>
      </ul>
    </div>
    <!---content--->
    <div class="content">

        <!----Left Menu---->
        <div class="leftmenu">
          <!-- arama alanı -->
          <div class="ara" >
            <h3 class="h1">Arama</h3>
            <form action="" method="get" class="search">
              <input type="text" placeholder="Aranan kelime..." name="ara"  value="">
              <button type="submit">Ara</button>
            </form>

          </div>
            <br><br><br><br><br><br><br>
          <div class="genelbilgiler_tablosu">
            <h3 class="h1">Genel Bilgiler</h3>
            <li ><a href="#">Ehliyet Randevusu Alma</a></li>
            <li ><a href="#">Ehliyet Kurs Ücretleri</a></li>
            <li ><a href="#">Ehliyet Sınav Tarihleri</a></li>
            <li ><a href="#">Ehliyet Sınav Soruları</a></li>
            <li ><a href="#">Ehliyet Sınav Yerleri</a></li>
            <li ><a href="#">Ehliyet Sınıfları</a></li>
            <li ><a href="#">Ehliyet Maliye Harcı</a></li>
            <li ><a href="#">Gerekli Belgeler</a></li>
            <li ><a href="#">Online Sınav Soruları</a></li>
            <li ><a href="#">İş Başvurusu</a></li>
            <li ><a href="#">Fihrist</a></li>

          </div>
          <table>
            <tr>
              <td> <br> </td>
            </tr>
          </table>
          <div class="genelbilgiler_tablosu">
            <h3 class="h1">Faydalı Bilgiler</h3>
            <li ><a href="#">Güvenli Seyahat için</a></li>
            <li ><a href="#">Ehliyetini Kaybedenlere Bilgi</a></li>
            <li ><a href="#">Genel Kurallar</a></li>
            <li ><a href="#">Ehliyet Sınav Soruları</a></li>
            <li ><a href="#">Ehliyet Sınav Yerleri</a></li>
            <li ><a href="#">Ehliyet Sınıfları</a></li>
            <li ><a href="#">Ehliyet Maliye Harcı</a></li>
            <li ><a href="#">Gerekli Belgeler</a></li>
          </div>
        </div>
        <!-----icerik----->
          <div class="icerik">
            <div class="h1" style="font-size:30px; text-align:center;">
              Aksin Sürücü Kursu Online Kayıt
            </div>
            <br>
          <div class="form">
            <div class="kayit">
              <h3 class="h1" style="text-align:center; width:424px;">Kayıt Ol</h3>
             <form action="" method="post">
               Ad:<span class="sabit"><input type="text" name="ad"></span><br><br>
               Soyad:<span class="sabit"><input type="text" name="soyad"></span><br><br>
               Telefon Numarası: <span class="sabit"><input type="text" name="phone" placeholder="0 (5XX) XXX XX XX"></span><br><br>
               E-Mail: <span class="sabit"><input type="text" name="mail"></span><br><br>
               Şifre: <span class="sabit"><input type="password" name="sifre"></span><br><br>
               Şifreyi Tekrar Giriniz: <span class="sabit"><input type="password" name="sifre2"></span><br><br>
               Ehliyet Sınıfı: <span class="sabit">
                 <select name="esinif">
                   <option value="A1">A1 - 125 cc ye kadar Motor</option>
                   <option value="A2">A2 - 125 ile 500 cc arası Motor</option>
                   <option value="A">A - 500 cc ve üzeri Motor</option>
                   <option value="B">B</option>
                   <option value="B">B - Engelli</option>
                   <option value="D">D - Otobüs</option>
                   <option value="C">C - Kamyon</option>
                   <option value="C E">CE -Tır</option>
                 </select>
               </span><br><br>
               Tahsil Durumu: <span class="sabit">
                 <select name="durum">
                 <option value="ilkokul">İlkokul</option>
                 <option value="ortaokul">ortaokul</option>
                 <option value="lise">Lise</option>
                 <option value="üniversite">Üniversite</option>
                 </select>
             </span><br><br>
             <button type="submit" name="kayit" style="float: left;">Kayıt Ol</button> <br><br>
             </form>
             <?php
             ini_set('display_errors',0);
              include('sql/connect.php');
             if(isset($_POST['kayit'])){
               $ad=$_POST['ad'];
               $soyad=$_POST['soyad'];
               $telefon=$_POST['phone'];
               $mail=$_POST['mail'];
               $sifre=$_POST['sifre'];
               $sifre2=$_POST['sifre2'];
               $esinif=$_POST['esinif'];
               $tahsil=$_POST['durum'];

               include('sql/ekle.php');
             }
              ?>

             <br>
            </div>
            <br><br>
          </div>
             <div class="form form2 icerik" style="width:330px; margin-left:50px;">
               <h3 class="h1" style="text-align:center;">Giriş Yap</h3>
               <form action="" method="post" style="padding-right:30px;">
                 E-Posta: <span class="sabit"><input type="text" name="eposta"> </span><br><br>
                 Şifre: <span class="sabit"><input type="password" name="sifre"></span><br><br>
                 <button type="submit" name="giris">Giriş Yap</button><br><br><br>
               </form>
               <?php 
               if(isset($_POST['giris'])){
                $eposta = $_POST['eposta'];
                $sifre = $_POST['sifre'];
                $sql_check = mysqli_query($connect,"select * from kayit where eposta='".$eposta."' and sifre='".$sifre."' ") or die(mysql_error());
                $row=mysqli_fetch_array($sql_check);
                extract($row);
                if($eposta==$row['eposta']){
                  $_SESSION['ad']=$row['ad'];
                  echo "Giriş yapılıyor lütfen bekleyiniz. <br>";
                  echo "Beklemek istemiyorsanız <a href='index.php'>Tıklayın</a>";
                  header("refresh:2; url=index.php?id={$id}");
                }
                else{
                  echo "Kullanıcı adı veya Şifre yanlış!!!!";
                }
                 
               }
              
               ?>
             </div>
          </div>
          </div>
          <div>
            <div class="rightmenu">
              <div class="genelbilgiler_tablosu">
                <h3 class="h1">Hizmetlerimiz</h3>
                <li ><a href="#">Otomobil Ehliyeti (Düz-Otomatik)</a></li>
                <li ><a href="#">Kamyon Ehliyeti</a></li>
                <li ><a href="#">Tır Ehliyeti</a></li>
                <li ><a href="#">Otomobil Ehliyeti</a></li>
                <li ><a href="#">A - A1 - A2 Motor Ehliyetleri</a></li>
                <li ><a href="#">Özel Direksiyon Eğitimi</a></li>
                <li ><a href="#">Psikoteknik Belgesi</a></li>
                <li ><a href="#">Src 1 - 2 - 3 - 4 Belgesi</a></li>
              </div>
              <table>
                <tr>
                  <td> <br> </td>
                </tr>
              </table>
              <div class="genelbilgiler_tablosu">
                <h3 class="h1">Ehliyet Sınıfları</h3>
                <li ><a href="#">A Motorsiklet Ehliyeti</a></li>
                <li ><a href="#">A1 Motorsiklet Ehliyeti</a></li>
                <li ><a href="#">A2 Motorsiklet Ehliyeti</a></li>
                <li ><a href="#">Otomobil Ehliyeti</a></li>
                <li ><a href="#">A - A1 - A2 Motor Ehliyetleri</a></li>
                <li ><a href="#">Özel Direksiyon Eğitimi</a></li>
                <li ><a href="#">Psikoteknik Belgesi</a></li>
                <li ><a href="#">Src 1 - 2 - 3 - 4 Belgesi</a></li>
              </div>
              <table>
                <tr>
                  <td> <br> </td>
                </tr>
              </table>
              <div class="genelbilgiler_tablosu">
                <h3 class="h1">Trafik</h3>
                <li ><a href="#">Trafik kuralları</a></li>
                <li ><a href="#">Trafik işaretleri ve amaçları</a></li>
                <li ><a href="#">Trafik işaretleri</a></li>
                <li ><a href="#">Durma Kuralları</a></li>
                <li ><a href="#">Aşırı Hız</a></li>
                <li ><a href="#">Uykusuz Yorgun Araç Kullanımı</a></li>
                <li ><a href="#">Trafik ve Çevre Bilgisi Dersi</a></li>
              </div>
            </div>
          </div>
      </div>
      <div class="footer">
         <p> Aksin Sürücü Kursu Şirinevler Meydanı Toyak İş Merkezi Giriş Kat No:49 Şirinevler - Bahçelievler İSTANBUL</p>
         <p>Telefonlar</p>
         <p>0212 504 04 04 - 444 30 21 - ( 0551) 731 23 23 </p>
      </div>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>
