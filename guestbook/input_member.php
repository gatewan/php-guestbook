<html>
<!--
*gatewan.com
*Wawan Beneran
*Engine Registrasi(Untuk Action Tombol "Submit")
-->

<head>
<title>Contact</title>
</head>
<body>
<h1>REGISTRASI</h1>
<a href="daftar.php">Kembali ke Registrasi</a>
<br>
<h2>MEMBER</h2>
<a href="anggota.php">Lihat Anggota</a>
<hr size=1>

<?php
include ("connect.php");
$nama=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

//sql entry data pada tabel
$sql = "INSERT INTO anggota (nama, username, email, password)
VALUES ('$nama','$username','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Selamat Bergabung!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>