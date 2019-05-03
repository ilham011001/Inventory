	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Invoice
				<small>#007612</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Inventory</a></li>
				<li><a href="#">Examples</a></li>
				<li class="active">Invoice</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="invoice">
			<!-- title row -->
			<div class="row">
				<div class="col-xs-12">
					<h2 class="page-header">
						<i class="fa fa-"></i>Operator : <?php echo $faktur['username'] ?>
						<small class="pull-right">Date : <?php echo $faktur['tanggal_masuk'] ?></small>
					</h2>
				</div>
				<!-- /.col -->
			</div>
			<!-- info row -->

			<!-- Table row -->
			<div class="row">
				<div class="col-xs-12 table-responsive">
					<table class="table table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Barang</th>
							<th>Harga Barang</th>
							<th>Jumlah Beli</th>
							<th>Subtotal</th>
						</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($barangs as $key => $value): ?>
								<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $value->nama_barang ?></td>
							<td><?php echo $value->harga_barang ?></td>
							<td><?php echo $value->jumlah_beli ?></td>
							<td><?php echo $value->sub_total ?></td>
						</tr>
							<?php endforeach ?>
						
						</tbody>
					</table>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

			<div class="row">
				<!-- accepted payments column -->
				<div class="col-xs-6">
				</div>
				<!-- /.col -->
				<div class="col-xs-6">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Total:</th>
								<td>Rp. <?php echo $faktur['total_harga'] ?></td>
							</tr>
						</table>
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

			<!-- this row will not appear when printing -->
			<div class="row no-print">
				<div class="col-xs-12">
					<!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
					<button type="button" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print
					</button>
					<!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
						<i class="fa fa-download"></i> Generate PDF
					</button> -->
				</div>
			</div>
		</section>
		<!-- /.content -->
		<div class="clearfix"></div>
	</div>
	<!-- /.content-wrapper -->
