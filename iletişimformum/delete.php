<?php
    include ('db.php');

    $silId=intval($_GET['FormId']);

    

    if($conn->query("DELETE FROM formum WHERE FormId=$silId"))
    {
        echo "<script>alert('Mesajınız silindi.');</script>";
        echo "<script>document.location='index.php'; </script>";
    }

?>