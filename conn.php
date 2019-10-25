<?php   
    $conn = new mysqli('localhost','root','','btl');
    if(!$conn){
        echo "ket noi that bai";
    }
    mysqli_query($conn, 'SET NAMES UTF8');
?>