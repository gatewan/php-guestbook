<?php
/*
*gatewan.com
*Wawan Beneran
*ENGINE DELETE (Untuk action hiperlink "Delete" di Daftar Anggota)
*/
include ("connect.php");
$sql = "DELETE from anggota where id=$_REQUEST[id]";

if ($conn->query($sql) === TRUE) {
    echo "Data Telah Dihapus!";
	include("anggota.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
