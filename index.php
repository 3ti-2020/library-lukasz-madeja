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


                    $result1 = $conn->query("SELECT id_book, autor, tytul FROM library_book, library_autor, library_tytul WHERE library_book.id_autor=library_autor.id_autor AND library_book.id_tytul=library_tytul.id_tytul");

                    echo("<table class='tabelka2' border=1");
                    echo("<tr>
                    <th>ID Książki</th>
                    <th>Autor</th>
                    <th>Tytuł</th>
                    <th>Usuwanie</th>
                    </tr>");

                    while($row=$result1->fetch_assoc() ){
                        echo("<tr>");
                        echo("<td>".$row['id_book']."</td>");
                        echo("<td>".$row['autor']."</td>");
                        echo("<td>".$row['tytul']."</td>");
                        echo("<td>
                                <form action='delete3.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['id_book']."'>
                                    <input type='submit' value='x'>
                                </form>
                            </td>");
                        echo("</tr>");
                    }
                    echo("</table>");
                ?>
        </div>
        <div class="item c">
                        <h3>Autor</h3>
                                <form action="insert1.php" method="post" class="insert">
                                    <input type="text" name="autor" placeholder="Autor">
                                    <input type="submit" value="Zapisz">
                                </form>
                                <h3>Tytuł</h3>
                                <form action="insert2.php" method="post" class="insert">
                                    <input type="text" name="tytul" placeholder="Tytuł">
                                    <input type="submit" value="Zapisz">

                        <h3>Autor + Ksiazka</h3>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "library";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $result2 = $conn->query("SELECT * FROM library_autor");

                        echo("<form action='insert3.php' method='POST'  class='insert'>");
                        echo("<select name='autorselect'>");
                        while($row=$result2->fetch_assoc() ){
                            echo("<option value='".$row['id_autor']."'>".$row['autor']."</option>");
                        }
                        echo("</select>");

                        $result3 = $conn->query("SELECT * FROM library_tytul");

                        echo("<select name='tytulselect'>");
                        while($row=$result3->fetch_assoc() ){
                            echo("<option value='".$row['id_tytul']."'>".$row['tytul']."</option>");
                        }
                        echo("</select>");

                        echo("<input type='submit' value='Zapisz'>");
                        echo("</form>");
                    ?>
            </div>
            <div class="item d">
                        <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "library";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $result4 = $conn->query("SELECT * FROM library_autor");

                        echo("<h3>Usuń autora:</h3>");
                        echo("<form action='delete1.php' method='POST'  class='delete'>");
                        echo("<select name='id_autor'>");
                        while($row=$result4->fetch_assoc() ){
                            echo("<option value='".$row['id_autor']."'>".$row['autor']."</option>");
                        }
                        echo("</select>");

                        echo("<input type='submit' value='Zapisz'>");
                        echo("</form>");

                        $result5 = $conn->query("SELECT * FROM library_tytul");

                        echo("<h3>Usuń tytuł:</h3>");
                        echo("<form action='delete2.php' method='POST'  class='delete'>");
                        echo("<select name='id_tytul'>");
                        while($row=$result5->fetch_assoc() ){
                            echo("<option value='".$row['id_tytul']."'>".$row['tytul']."</option>");
                        }
                        echo("</select>");

                        echo("<input type='submit' value='Zapisz'>");
                        echo("</form>");

                        ?>
            </div>
            </div>
    </div>
    
</body>
</html>