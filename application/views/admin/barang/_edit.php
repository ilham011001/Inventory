<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Barang
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
            <form enctype="multipart/form-data" method="POST" action="<?php echo site_url('barang/update') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Barang</label>
                  <input type="text" class="form-control" placeholder="Kode Barang" required value="<?php echo $barang['kd_barang'] ?>" disabled>
                  <input type="hidden" name="kd_barang" value="<?php echo $barang['kd_barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Barang</label>
                  <input type="text" class="form-control" placeholder="Nama Barang" required name="nama_barang" value="<?php echo $barang['nama_barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis</label>
                  <select class="form-control" name="kd_jenis" required>
                  	<option value="">-- Pilih Jenis --</option>
                  	<?php foreach ($merks as $key => $value) {
                  		if($barang['kd_jenis'] == $value->kd_jenis)
                  		echo "<option selected value=$value->kd_jenis>$value->jenis</option>";
                  		else	
                  		echo "<option value=$value->kd_jenis>$value->jenis</option>";
                  	} ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Distributor</label>
                  <select class="form-control" name="kd_distributor" required>
                  	<option value="">-- Pilih Distributor --</option>
                  	<?php foreach ($distributors as $key => $value) {
                  		if($barang['kd_distributor'] == $value->kd_distributor)
                  		echo "<option selected value=$value->kd_distributor>$value->nama_distributor</option>";
                  		else	
                  		echo "<option value=$value->kd_distributor>$value->nama_distributor</option>";
                  	} ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga</label>
                  <input type="number" class="form-control" placeholder="Harga" required name="harga_barang" value="<?php echo $barang['harga_barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Stok</label>
                  <input type="number" class="form-control" placeholder="Stok" required name="stok" value="<?php echo $barang['stok'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <input type="text" class="form-control" placeholder="Keterangan" required name="keterangan" value="<?php echo $barang['keterangan'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <input type="file" id="exampleInputFile" name="gambar">
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
