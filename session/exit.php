<?php
session_start();
session_destroy();
if($_SESSION['k_adi']){
header('location:../admin.php');
}
else{
    header('location:../index.php');
}
echo 'Admin Hesabından Çıkış Yapıldı';
?>