<?php
 		include_once('connect.php');
		
		$autor = $_POST['autor'];
        $tytul = $_POST['tytul'];
        $id = $_POST['id'];
		
		if(mysql_query("INSERT INTO library_autor, library_tytul, library_book VALUES('$autor', '$tytul', '$id')"))
		  echo "Successfully";
		else
		  echo "Failed";
?>