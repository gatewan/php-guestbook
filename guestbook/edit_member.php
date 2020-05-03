<html>
<title>:::EDITDATA:::</title>
<!--
*gatewan.com
*Wawan Beneran
*GUI/FORM Edit Informasi (Untuk Hiperlink Edit di Daftar Anggota)
-->
<?php 
include ("anggota.php");/*saya sertakan juga tampilan Daftar Anggota,
Agar tidak repot bolak-balik hanya untuk melihat hasilnya.*/
?>
<body>
<h2><p>::EDIT DATA::</h2></p>
<form method="post" action="update_member.php">
<table border="0">
<tr>
<td>id</td>
<td>:</td>
<td><input type="text" name="id">
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
</table>
<br>
<table border="0">
<tr>
<td><input type="submit" value="save"></td>
<td><input type="reset" value="reset"></td>
</tr>
</table></form></body></html>