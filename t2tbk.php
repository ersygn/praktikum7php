<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "CREATE TABLE kelamin (id_kelamin VARCHAR(2) PRIMARY KEY, jenis_kelamin VARCHAR(10) NOT NULL)";

if (mysqli_query($conn, $sql)){
	echo "New record created succesfully";
} else {
	echo "Error: ". $sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>