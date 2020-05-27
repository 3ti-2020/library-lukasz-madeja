<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE FROM `library_tytul` WHERE id_tytul=".$_POST['id_tytul']." "; 
    mysqli_query($conn, $sql);
    header("Location:index.php");

?>