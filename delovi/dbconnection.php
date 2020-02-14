<?php
//povezivanje na sql server i pravljenje objekta
try{
	$con = new PDO("mysql:host=localhost;dbname=dinamicko", "root","");
	}
catch(PDOException $err){
    echo $err->getMessage();
}

?>