<?php
	$db = new mysqli('127.0.0.1','root',''); //Csatlakozás az adatbázishoz
    if(!$db){
        die('Could not connect: ' . mysqli_error());
    }
        include "createdb.php";
?>