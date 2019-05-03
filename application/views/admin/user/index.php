  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo site_url('user/add') ?>" class="btn btn-primary">Tambah User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>No</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
					<th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($users as $key => $value): ?>

				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $value->username ?></td>
					<td><?php echo $value->password ?></td>
					<td><?php echo $value->level ?></td>
					<td>
						<a href="<?php echo site_url('user/edit/').$value->kd_user ?>">Edit</a>
						<a href="">Delete</a>
					</td>
				</tr>

				<?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
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
  

