<html>
<head>
	<title>Halaman Edit Data</title>
</head>

<body>
	<h3>Form Edit Data</h3>

	<table>
		<form action="<?php echo base_url('Welcome/AksiEdit') ?>" method="post">
		<tr>
			<td>Kode Barang</td>
			<td>:</td>
			<td>
				<input type="text" value="<?php echo $data_brg->kode_barang ?>" disabled> 
				<input type="hidden" name="kode_barang" value="<?php echo $data_brg->kode_barang ?>">
			</td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama_barang" value="<?php echo $data_brg->nama_barang ?>"></td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td>:</td>
			<td><input type="text" name="harga_barang" value="<?php echo $data_brg->harga_barang ?>"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>


</body>
</html>