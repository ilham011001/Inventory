<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Merk
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
            <form role="form" method="POST" action="<?php echo site_url('merk/update') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Merk</label>
                  <input type="text" class="form-control" placeholder="Enter email" value="<?php echo $merk['kd_jenis'] ?>">
                  <input type="hidden" name="kd_jenis" value="<?php echo $merk['kd_jenis'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Merk</label>
                  <input type="text" class="form-control" placeholder="Merk" required name="jenis" value="<?php echo $merk['jenis'] ?>">
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
