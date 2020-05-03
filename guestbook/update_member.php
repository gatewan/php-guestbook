<?php
/*
*gatewan.com
*Wawan Beneran
*ENGINE UPDATE (Untuk Action Tombol "Save" di From Update)
*/

include ("connect.php");
$id=$_POST['id'];
$nama=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

// sql entry data pada tabel
$sql = "UPDATE anggota set nama='$nama', username='$username', email='$email', password='$password' where id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Data Telah Diupdate!";
	include("anggota.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
