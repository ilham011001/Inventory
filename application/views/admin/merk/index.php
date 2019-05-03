  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Merk
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo site_url('merk/add') ?>" class="btn btn-primary">Tambah Merk</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>Kode Merk</th>
					<th>Merk</th>
					<th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($merks as $key => $value): ?>

				<tr>
					<td><?php echo $value->kd_jenis; ?></td>
					<td><?php echo $value->jenis ?></td>
					<td>
						<a href="<?php echo site_url('merk/edit/').$value->kd_jenis ?>">Edit</a>
						<a href="">Delete</a>
					</td>
				</tr>

				<?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Kode Distributor</th>
					<th>Merk</th>
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
  

