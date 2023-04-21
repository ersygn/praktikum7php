<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, email, id_kelamin, id_status) VALUES ('1', 'ersy', 'ersy@gmail.com','2','1'),('2', 'genius', 'genius@gmail.com','2','2'), ('3', 'nagari', 'nagari@gmail.com','2','1')";

if (mysqli_query($conn, $sql)){
	echo "New record created succesfully";
} else {
	echo "Error: ". $sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>