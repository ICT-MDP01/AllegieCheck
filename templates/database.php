<?php 
​
	$host = "db4free.net:3306/allergiecheck";
    $database = "mysql:host=" . $host . ";dbname=allergiecheck;port=3306";
    $user = "allergiecheck";
    $pass = "sinterklaas";
​
    try {
    	$pdo = new PDO($database, $user, $pass);
    } catch(PDOException $exception) {
	    echo $exception->getMessage();
	}

​
?>