<html>
<!--
*gatewan.com
*Wawan Beneran
*Engine Daftar Anggota (Untuk Hiperlink "Lihat Anggota")
-->
<head>
<title>Daftar Anggota</title>
</head>
<body>
<h1>Daftar Anggota</h1>
<a href="daftar.php">Kembali ke Registrasi</a>
<br>
<hr size=1>

<?php 
include ("connect.php");
// sql menampilkan record
$sql = "SELECT id, nama, username, email, password FROM anggota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data setiap baris
echo '<table border="1" width="700">';
echo '<tr>';
echo '<td><center>ID</td>';
echo '<td><center>Nama</td>';
echo '<td><center>Username</td>';
echo '<td><center>Email</td>';
echo '<td><center>Password</td>';
echo '<td><center>Action</td>';
echo '</tr>';

		while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo '<td><center>'.$row["id"].'</td>';
		echo '<td><center>'.$row["nama"].'</td>';
		echo '<td><center>'.$row["username"].'</td>';
		echo '<td><center>'.$row["email"].'</td>';
		echo '<td><center>'.$row["password"].'</td>';
		echo '<td><center><a href="delete_member.php?id='.$row['id'].'&action=delete">Delete</a>';
		echo ' | <a href="edit_member.php?id='.$row['id'].'&action=edit_member.php">Edit</a></center></td>';
		echo '</tr>';
    }
echo '</table>';

} else {
    echo "0 results";
}
$conn->close()
?>

</body>
</html>