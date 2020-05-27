<?php

    var_dump($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO `library_book`(`id_book`, `id_autor`, `id_tytul`) VALUES (NULL , '".$_POST['autorselect']."', '".$_POST['tytulselect']."')";
    echo("<li>".$sql);
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("index.php");
    


?>