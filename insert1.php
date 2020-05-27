<?php
    var_dump($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO `library_autor`(`id_autor`, `autor`) VALUES (NULL , '".$_POST['autor']."') ";

    echo("<li>".$sql);

    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location:index.php");
    
?>