<style>
.h3{
    text-align:center;
    font-size:36px;
    background-color:#333333;
    color:white;
    font-family:sans-serif;
}
a{text-decoration:none;}
.iceri{
    margin:auto;
    width:350px;
    height:device-height;
    border:3px dotted black;
    font-size:20px;
    padding-left:100px;
    padding-right:100px;
    padding-top:20px;
}
</style>
<link rel="stylesheet" href="../css/index.css">
<?php 
include 'connect.php';
    $id= @$_GET['id'];
   
    
    if($_POST){
        $ad=$_POST['ad'];
        $soyad=$_POST['soyad'];
        $eposta=$_POST['mail'];
        $telefon=$_POST['phone'];
        $esinif=$_POST['esinif'];
        $tahsil=$_POST['durum'];

        $guncelle=mysqli_query($connect,"UPDATE kayit SET ad='$ad',soyad='$soyad',eposta='$eposta',telefon='$telefon',esinif='$esinif',tahsil='$tahsil' WHERE id='$id'");
        if($guncelle){
            echo "Müşteri bilgileri güncellendi. Güncel bilgilere erişmek için <a href='../musteriler.php'>Önceki Sayfaya Geri Dön</a>";
        }
    }else{
        $bul =mysqli_query($connect,"SELECT * FROM kayit where id='$id'");
        $row=mysqli_fetch_array($bul);
        extract($row);
    echo "<h3 class='h3'>Verileri Güncelle</h3>";
    echo "<div><a href='../musteriler.php'><---Önceki Sayfaya Geri Dön</a></div>
    <div class='iceri'>
    <form action='' method='post'>
               Ad:<span class='sabit'><input type='text' name='ad' value='".$ad."'></span><br><br>
               Soyad:<span class='sabit'><input type='text' name='soyad' value='".$soyad."'></span><br><br>
               Telefon Numarası: <span class='sabit'><input type='text' name='phone' value='".$telefon."'></span><br><br>
               E-Mail: <span class='sabit'><input type='text' name='mail' value='".$eposta."'></span><br><br>
               Ehliyet Sınıfı: <span class='sabit'>
                 <select name='esinif'>
                 <option value='".$esinif."'>Kayıtlı olan Ehliyet Sınıfı:$esinif</option>
                   <option value='A1'>A1 - 125 cc ye kadar Motor</option>
                   <option value='A2'>A2 - 125 ile 500 cc arası Motor</option>
                   <option value='A'>A - 500 cc ve üzeri Motor</option>
                   <option value='B'>B</option>
                   <option value='B'>B - Engelli</option>
                   <option value='D'>D - Otobüs</option>
                   <option value='C'>C - Kamyon</option>
                   <option value='C E'>CE -Tır</option>
                 </select>
               </span><br><br>
               Tahsil Durumu: <span class='sabit'>
                 <select name='durum'>
                 <option  value='".$tahsil."'>Tahsil Durumu:$tahsil</option>
                 <option value='ilkokul'>İlkokul</option>
                 <option value='ortaokul'>ortaokul</option>
                 <option value='lise'>Lise</option>
                 <option value='üniversite'>Üniversite</option>
                 </select>
             </span><br><br>
             <button type='submit' name='guncelle' style='float: left;'>Güncelle</button> 
             <a href=''>Şifre Değiştir</a> <br> <br>
             </form>
    </div>";}
?>
