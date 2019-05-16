<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=data_trans", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
   // echo "Connection failed: " . $e->getMessage();
    }
	
	 $stmt = $conn->prepare("select * from data");
	$stmt->execute();
	$result = $stmt->fetchAll();
foreach ($result as $row) { echo $row['value']."<br>";}
?>