<html>
<head><title>Halaman Form Input</title></head>
<body>
	<h3>Form Tambah Data</h3>

	<table>
		<form action="<?php echo base_url('Welcome/AksiInsert') ?> "method="post">
		<tr>
			<td>Kode Barang</td>
			<td>:</td>
			<td><input type="text" name="kode_barang" required></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama_barang" required></td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td>:</td>
			<td><input type="text" name="harga_barang" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="SIMPAN"></td>
		</tr>
		<form>
	</table>


</body>
</html>