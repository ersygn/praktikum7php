<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pegawai</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h1 align="center" style="margin-top: 20px">Tambah Data Pegawai</h1>
<form method="POST">
	<table cellpadding="10" align="center" style="margin-top: 20px">
		<tr>
			<td>Nama Pegawai</td>
			<td><input type="text" name="nama_pegawai"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="id_kelamin">
					<option>Pilih Jenis Kelamin :</option>
					<?php
					$con = mysqli_connect("localhost","root","","datapegawai");
					$sc = mysqli_query($con,"SELECT * FROM kelamin") or die (mysqli_error($con));
					while ($isi = mysqli_fetch_array($sc)) {
						echo "<option value=$isi[id_kelamin]> $isi[jenis_kelamin]</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Jabatan</td>
			<td>
				<select name="id_status">
					<option>Pilih Status Jabatan :</option>
					<?php
					$con = mysqli_connect("localhost","root","","datapegawai");
					$sc2 = mysqli_query($con,"SELECT * FROM status") or die (mysqli_error($conn));
					while ($isi2 = mysqli_fetch_array($sc2)) {
						echo "<option value=$isi2[id_status]> $isi2[status_jabatan]</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Cek data dengan benar<br>Sudah benar? klik Simpan</td>
			<td><input type="submit" value="Simpan Data" class="btn btn-outline-success" name="simpan"></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['simpan'])) {
	mysqli_query($con,"INSERT INTO pegawai set nama_pegawai = '$_POST[nama_pegawai]', email = '$_POST[email]', id_kelamin = '$_POST[id_kelamin]', id_status = '$_POST[id_status]'") or die(mysqli_error($con));

	echo "<script>alert('Tambah Data Berhasil')</script>";
}
?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>