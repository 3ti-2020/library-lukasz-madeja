<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bilbioteka Łukasz Madeja</title>
</head>
<body>
    <div class="grid">
        <div class="item a">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" width="200px" height="200px"></a>
            </div>
        </div>
        <div class="item b">
                    <?php
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "library";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result1 = $conn->query("SELECT autor, tytul FROM library_autor, library_tytul, library_book WHERE library_book.id_tytul = library_tytul.id_tytul AND library_autor.id_autor = library_book.id_autor");
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>Autor</th> 
                <th>Tytul</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['autor']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("</tr>");
                }
                echo("</table>");


                    ?>
        </div>
        <div class="item c">
            <h3>>Tu bedzie insert i delete<</h3>
        </div>
    </div>
    
</body>
</html>