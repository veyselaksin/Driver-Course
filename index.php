  <!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8" content="device-width initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/icerik.css">
    <title>Aksin Sürücü Kursu</title>
    <style>
      .lradius{border-radius: 15px 0px 0px 0px;}
      .h1{border:1px solid black; line-height: 40px; background-color: #333333; color:white; margin: 0px; padding-left: 5px;}
      #ara{border-radius: 3px; height: 25px;}
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
          <li>
          <?php 
            session_start();
            include 'sql/connect.php';
            $id=@$_GET['id'];
            $bul=mysqli_query($connect,"SELECT * FROM kayit WHERE id='$id'");
            $row=mysqli_fetch_assoc($bul);
            
            if(isset($_SESSION['k_adi'])){
              echo "<a href='musteriler.php'>".$_SESSION['k_adi']." ile giriş yapıldı.</a></li>";
            }
           
            elseif(isset($_SESSION['ad'])){
              echo "<a href='duzenle.php?id={$id}'>".$_SESSION['ad']." ile giriş yapıldı.</a></li>";
            }
            else{
              echo '<li><a href="kayit.php">Online Kayıt Ol ve Giriş Yap</a></li>';
            } 
          ?>
          
          </li>
        </ul>
      </div>
      <!--------Slider------->

      <!---content--->
      <div class="content">

          <!----Left Menu---->
          <div class="leftmenu">
            <!-- arama alanı -->
            <div class="ara">
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
              <div class="h1" style="font-size:30px; text-align:center; background-color:#cc0066; border:#cc0066;">
                Aksin Sürücü Kursu Genel Duyurular
              </div>
              <div class="duyurular">
                <li ><a href="#">4 Ağustos Ehliyet Sınav Soruları Açıklandı</a></li>
                <li ><a href="#">En yakın e-sınav Ehliyet Sınavı İçin Kursumuza Hemen Kayıt Yaptırabilirsiniz</a></li>
                <li ><a href="#">Online Çözebileceğiniz Sınav Soruları İçin Tıklayınız !</a></li>
              </div>
              <table>
                <tr>
                  <td></td>
                </tr>
              </table>
              <div class="icerik1">
                <h3 class="h1">Simülatörlü Eğitim Ayrıcalığı</h3>
                <img src="images/simulator.jpg" alt="Simülatör" width="100%">
                <br>
                <strong>Simülatörlü Eğitim</strong> Aksin Sürücü Kursu adaylarının trafiğe çıkmadan önce yaşadığı stresi ve heyecanı en aza indirerek trafiğe uyumlarını Sağlar.
                Simülatör Eğitimi için Adaylarımız
                10:00 - 18:00 arası her zaman eğitime gelebilirler.  <strong><a href="#" class="icerik1" ><p>Devamı için tıklayın</p></a></strong>
                <br><br><br><br><br><br><br><br><br>
              </div>
              <div class="icerik1 icerik2" style="margin-left:5px;">
                <h3 class="h1">2018 Yılı Sınav Takvimi</h3>
                <img src="images/takvim.jpg" alt="Takvim" width="100%">
                <br>
                  <li ><a href="#">10 Şubat 2018 Cumartesi</a></li>
                  <li ><a href="#">21 Nisan 2018 Cumartesi</a></li>
                  <li ><a href="#">04 Ağustos 2018 Cumartesi</a></li>
                  <li ><a href="#">20 Ekim 2018 Cumartesi</a></li>
                  <li ><a href="#">2 Aralık 2018 Cumartesi</a></li>
              </div>
              <div class="icerik1 icerik2">
                <h3 class="h1">Ders Saatleri</h3>
                <img src="images/derssaatleri.jpg" alt="derssaatleri" width="100%">
                <li ><a href="#">Ders Saatleri</a></li>
                <li ><a href="#">Hafta Sonu Dersleri</a></li>
                <li ><a href="#">Hafta İçi Dersleri</a></li>
                <li ><a href="#">Hafta İçi Ders Proğramı</a></li>
                <li ><a href="#">Hafta Sonu Ders Programı</a></li>
                <li ><a href="#">Kaza Tespit Tutanağı</a></li>
              </div>
              <div class="icerik1 icerik2" style="margin-left:5px;">
                <h3 class="h1">2018 Yılı Ehliyet Harçları</h3>
                <img src="images/yeniehliyet.jpg" alt="Takvim" width="100%">
                <br>
                  <li ><a href="#">A - A1 - A2 Sınıfı Ehliyet <span class="sabit">164,40 TL</span></a></li>
                  <li ><a href="#">B Sınıfı Ehliyet <span class="sabit">495,70 TL</span></a></li>
                  <li ><a href="#">C - CE Sınıfı Ehliyet <span class="sabit">827,00 TL</span></a></li>
                  <li ><a href="#">D Sınıfı Ehliyet <span class="sabit">827,00 TL</span></a></li>
                  <li ><a href="#">G Sınıfı Ehliyet<span class="sabit">827,00 TL </span></a></li>
                  <li ><a href="#">H Sınıfı Ehliyet <span class="sabit">164,40 TL </span></a></li>
                  <li ><a href="#">Ehliyet Kart Ücreti <span class="sabit">133,92 TL</span></a></li>
                  <li ><a href="#">Vakıf Bedeli  <span class="sabit">25,24 TL</span></a></li>
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
