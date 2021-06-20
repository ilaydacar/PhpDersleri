<?php
   include ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>iletişimformum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https:/7fonts.gstatic.com">
    <link rel="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Satisfy&display=swap" rel="stylesheet">
    
</head>
<body>
<ul>
<li><a href="list.php">Tabloyu Görmek İçin Basınız.</a></li>
</ul>

<div class="container">
<h1>İletişim Formu</h1>

  <from>
  
  

    <form action="" method="POST">
    <h3>Ad Ve Soyad</h3>
      <textarea name="isim" placeholder="Ad Ve Soyad Giriniz."></textarea><br><br>
      <h3>Fabrika Adı</h3>
        <textarea name="firma"  placeholder="Fabrika Giriniz."></textarea><br><br>
        <h3>E-Mail</h3>
        <textarea name="Email"  placeholder="name@gmail.com"></textarea><br><br>
        <h3>Telefon</h3>
        <textarea name="telefon"  placeholder="Telefon Giriniz."></textarea><br><br>
        <h3>Konu</h3>
        <textarea name="konu"  placeholder="Konu Giriniz."></textarea><br><br>
        <h3>Mesaj</h3>
        <textarea name="mesaj"  placeholder="Mesaj Giriniz."></textarea><br><br>
        <input type="submit" value="Gönder"><br><br>
    </form>
 
  
  
    <?php

if($_POST)    
{
    $isim=$_POST['isim'];
    $firma=$_POST['firma'];
    $Email=$_POST['Email'];
    $telefon=$_POST['telefon'];
    $konu=$_POST['konu'];
    $mesaj=$_POST['mesaj'];
   

   

    if($conn->query("INSERT INTO formum(isim,firma,Email,telefon,konu,mesaj) VALUES('$isim','$firma','$Email','$telefon','$konu','$mesaj')"))
    {
       
            echo "<script>alert('Mesajınız iletildi.');</script>";
            echo "<script>document.location='list.php'; </script>";
    }      
    
    else
    {
        echo "<script>alert('Mesajınız İletilemedi.');<script>";
    }
}
?>
</div>


  

    
</div>

</body>
</html>
  




  
  
 




    
    
    