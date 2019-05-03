	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Semua Barang
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							
							<div class="col-md-6" style="margin-top: 10px">
								<form action="<?php echo site_url('report/excel_barang') ?>" method="post">
									<button type="submit" name="filter" class="btn btn-success"><i class="fa fa-print"> Excel</i></button>
								</form>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
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
					<th>Gambar</th>
					<th>Actions</th>
								</tr>
								</thead>
								<tbody>
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
					<td><?php echo $value->gambar ?></td>
					<td>
						<a href="<?php echo site_url('barang/edit/').$value->kd_barang ?>">Edit</a>
						<a href="">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>

								</tbody>
								<tfoot>
								<tr>
									<th>Kode Barang</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Distributor</th>
					<th>Stok</th>
					<th>Harga Barang</th>
					<th>Tanggal Masuk</th>
					<th>Keterangan</th>
					<th>Gambar</th>
					<th>Actions</th>
								</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.box-body -->					
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	


