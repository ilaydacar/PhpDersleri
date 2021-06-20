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
<li><a href="index.php">İletişim Formunu Görmek İçin Basınız.</a></li>
</ul>


<table class="table table-striped table-hover">
  <thead>
  <tr>
  <th>Numara</th>
  <th>Ad Ve Soyad</th>
  <th>Fabrika</th>
  <th>E-Mail </th>
  <th>Telefon</th>
  <th>Konu</th>
  <th>Mesaj</th>
  <th></th>
  <th></th>
  </tr>
 </thead>
 

    
   
    
   
 


 
<?php
$sorgu=$conn->query("SELECT *FROM formum");
while ($sonuc=$sorgu->fetch_assoc()){
  $id=$sonuc['FormId'];
  $isim=$sonuc['isim'];
  $firma=$sonuc['firma'];
  $Email=$sonuc['Email'];
  $telefon=$sonuc['telefon'];
  $konu=$sonuc['konu'];
  $mesaj=$sonuc['mesaj'];

?>

<tr>
<td><?php echo $id ?></td>
<td><?php echo $isim ?></td>
<td><?php echo $firma ?></td>
<td><?php echo $Email ?></td>
<td><?php echo $telefon ?></td>
<td><?php echo $konu ?></td>
<td><?php echo $mesaj ?></td>
<td><a href="update.php?FormId=<?php echo $id ?>">Düzenle</a></td>  
<td><a href="delete.php?FormId=<?php echo $id?>" class="btn btn-danger">Sil</a></td>

    </tr>


</tr>
<?php
}
?>
</table>

    


</body>
</html>
  