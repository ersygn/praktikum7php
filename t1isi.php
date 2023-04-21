<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ISI) VALUES ('1', 'Ersy', 'ersy@gmail.com', 'tamu dari gresik'),('2', 'Genius', 'genius@gmail.com','tamu dari surabaya')";

if (mysqli_query($conn, $sql)){
	echo "New record created succesfully";
} else {
	echo "Error: ". $sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>