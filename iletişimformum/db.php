<?php
 

    $conn=new mysqli('localhost','root','','tablom'); 

    if(mysqli_connect_error())
    {
        echo mysqli_connect_error();
        exit();
    }

?>


