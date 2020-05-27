<?php
    var_dump($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO `library_tytul`(`id_tytul`, `tytul`) VALUES (NULL, '".$_POST['tytul']."')";
    echo("<li>".$sql);
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
    
?>