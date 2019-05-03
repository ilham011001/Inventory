<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Uer
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Quick Example</h3> -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?php echo site_url('user/update') ?>">
              <div class="box-body">
              	<input type="hidden" name="kd_user" value="<?php echo $user['kd_user'] ?>">
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" class="form-control" placeholder="Username" required name="username" value="<?php echo $user['username'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" placeholder="Password" required name="password" value="<?php echo $user['password'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Level</label>
                  <select class="form-control" name="level" required>
                  	<option value="">-- Pilih Level --</option>
                  	<option value="manager" <?php if($user['level']=="manager") echo "selected"; ?>>Manager</option>
                  	<option value="admin" <?php if($user['level']=="admin") echo "selected"; ?>>Admin</option>
                  	<option value="kasir" <?php if($user['level']=="kasir") echo "selected"; ?>>Kasir</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->



          <!-- Input addon -->

        </div>
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
