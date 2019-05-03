<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Distributor
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
            <form role="form" method="POST" action="<?php echo site_url('distributor/update') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Distributor</label>
                  <input type="text" class="form-control" placeholder="Enter email" value="<?php echo $distributor['kd_distributor'] ?>">
                  <input type="hidden" name="kd_distributor" value="<?php echo $distributor['kd_distributor'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" required name="nama_distributor" value="<?php echo $distributor['nama_distributor'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" required name="alamat" value="<?php echo $distributor['alamat'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Hp</label>
                  <input type="number" class="form-control" placeholder="No Hp" required name="no_hp" value="<?php echo $distributor['no_hp'] ?>">
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
