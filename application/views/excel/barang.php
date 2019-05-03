<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
</head>
<body>

	<h3>Barang</h3>

	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>Kode Barang</th>
				<th>Nama</th>
				<th>Jenis</th>
				<th>Distributor</th>
				<th>Stok</th>
				<th>Harga Barang</th>
				<th>Tanggal Masuk</th>
				<th>Keterangan</th>
				<!-- <th>Gambar</th> -->
			</tr>
		</thead>
		<?php foreach ($barangs as $key => $value): ?>

				<tr>
					<td><?php echo $value->kd_barang; ?></td>
					<td><?php echo $value->nama_barang ?></td>
					<td><?php echo $value->jenis ?></td>
					<td><?php echo $value->nama_distributor ?></td>
					<td><?php echo $value->stok ?></td>
					<td><?php echo $value->harga_barang ?></td>
					<td><?php echo $value->tanggal_masuk ?></td>
					<td><?php echo $value->keterangan ?></td>
					<!-- <td><?php echo $value->gambar ?></td> -->
				</tr>

				<?php endforeach; ?>
	</table>

</body>
</html>

<?php 

$tanggal = date('d-m-Y');

//Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

//Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=$tanggal-datasiswa.xls");

 ?>
