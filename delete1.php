<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE FROM `library_autor` WHERE id_autor=".$_POST['id_autor']." "; 
    mysqli_query($conn, $sql);
    header("Location:index.php");

?>