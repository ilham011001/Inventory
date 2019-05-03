  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Distributor
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo site_url('distributor/add') ?>" class="btn btn-primary">Tambah Distributor</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>Kode Distributor</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No HP</th>
					<th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($distributors as $key => $value): ?>

				<tr>
					<td><?php echo $value->kd_distributor; ?></td>
					<td><?php echo $value->nama_distributor ?></td>
					<td><?php echo $value->alamat ?></td>
					<td><?php echo $value->no_hp ?></td>
					<td>
						<a href="<?php echo site_url('distributor/edit/').$value->kd_distributor ?>">Edit</a>
						<a href="">Delete</a>
					</td>
				</tr>

				<?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Kode Distributor</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No HP</th>
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
  

