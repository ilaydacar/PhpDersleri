<?php
    include ('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Düzenleme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Güncelleme Sayfası</h1>
    
    <?php
        $sorgu=$conn->query("SELECT * FROM formum  Where FormId=".(int)$_GET['FormId']);

        $sonuc=$sorgu->fetch_assoc(); 
    ?>
<div class="container">
    <form action="" method="POST">
        <table>
            <tr>
            <td>Ad Ve Soyad</td>
                <td><textarea name="isim"><?php echo $sonuc['isim']; ?></textarea></td>
            </tr>
            <tr>
                <td>Fabrika</td>
                <td><textarea name="firma"><?php echo $sonuc['firma']; ?></textarea></td>
            </tr>
            <td>E-Mail</td>
                <td><textarea name="Email"><?php echo $sonuc['Email']; ?></textarea></td>
            </tr>
            <td>Telefon</td>
                <td><textarea name="telefon"><?php echo $sonuc['telefon']; ?></textarea></td>
            </tr>
            <td>Konu</td>
                <td><textarea name="konu"><?php echo $sonuc['konu']; ?></textarea></td>
            </tr>
            <td>Mesaj</td>
                <td><textarea name="mesaj"><?php echo $sonuc['mesaj']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Güncelle"></td>
            </tr>
        </table>
    </form>
</div>
<div>

    <?php
        if($_POST)
        {
            $isim=$_POST['isim'];
            $firma=$_POST['firma'];
            $Email=$_POST['Email'];
            $telefon=$_POST['telefon'];
            $konu=$_POST['konu'];
            $mesaj=$_POST['mesaj'];

           
            if($conn->query("UPDATE formum SET isim='$isim', firma='$firma', Email='$Email', telefon='$telefon',konu='$konu', mesaj='$mesaj' WHERE FormId=".$_GET['FormId']))
            {
                    echo "<script>alert('Mesajınız Düzeltildi.');</script>";
                    echo "<script>document.location='index.php'; </script>";
            }
            else{
                echo "<script>alert('Mesajınız Düzeltilmedi.');</script>";
            }
        }
    ?>

</div>

</body>
</html>