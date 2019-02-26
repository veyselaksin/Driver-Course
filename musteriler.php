<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http_equiv="Content-Type" content="text/html; charset=iso-8859-9"/>
    <title>Müşteriler</title>
    <style>
        .icerik{
        float:left; 
        padding-right:30px; 
        padding-left:10px; 
        margin-top:30px; 
        margin-left:5px;
        border:1px solid black;
        }
        
        h3{
            border:1px solid #333333;
            color:white;
            background-color: black;
            padding:10px;
            margin:0px;
            text-align:center;
            
        }
        span{
            float: right !important;
            
        }
    </style>
</head>
<body>
        
    <h3 style='background-color:#333333;'>Müşteri verileri</h3>
    <?php 
        include 'sql/connect.php';
        include 'sql/goster.php';
   ?>
        
    <a href="session/exit.php">[Çıkış Yap]</a>
    <a href="index.php">[Siteye Git]</a>
</body>
</html>