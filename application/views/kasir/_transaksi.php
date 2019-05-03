<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Beli Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" id="form_input">
              <div class="box-body">
              	<div class="row">
              		<div class="col-md-8">
		                <div class="form-group">
		                  <input type="text" class="form-control" placeholder="Nama Barang" disabled id="id_kode">
		                </div>
		            </div>
		            <div class="col-md-4">
		            	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete" id="button">Pilih Barang</button>
		            </div>
		        </div>
	                
                
              	<div class="row" style="margin-top: 10px;">
              		<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Nama</label>
		                  <input type="email" name="nama_barang" class="form-control" placeholder="Nama Barang" id="id_nama" disabled>

		                  <input type="hidden" name="nama_barang" id="nama">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Harga</label>
		                  <input type="text" name="harga_barang" class="form-control disabled" placeholder="Harga Barang" disabled id="id_harga">

		                  <input type="hidden" name="harga_barang" id="harga">
		                </div>
	                </div>
                </div>
                <div class="row">
              		<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Stok</label>
		                  <input type="text" class="form-control" placeholder="Stok" disabled id="id_stok">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Jumlah Beli</label>
		                  <input type="number" class="form-control" name="jumlah_beli" id="id_jumlah" onkeyup="hitung()" class="form-control" style="width: 100px" value="0" onblur="if(this.value==''){this.value='0'}" onfocus="if(this.value=='0'){this.value=''}" onchange="hitung()">
		                  <input type="hidden" name="kd_barang" id="kode">
		                </div>
	                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total</label>
                  <input type="text" class="form-control" name="total_harga" placeholder="Total Harga" disabled id="id_total">

                  <input type="hidden" name="total_harga" id="total">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" id="btn_finish" onclick="validation()" class="btn btn-primary" style="display: block; width: 100%;">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Keranjang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>Kode Barang</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Total</th>
					<th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tmps as $key => $value): ?>

				<tr>
					<td><?php echo $value->kd_barang; ?></td>
					<td><?php echo $value->nama_barang ?></td>
					<td><?php echo $value->jumlah_beli ?></td>
					<td><?php echo $value->sub_total ?></td>
					<td>
						<a onclick="return confirm('Apakah akan dihapus?')" href="<?php echo site_url('transaksi/delete_item/').$value->kd_temp ?>">Hapus</a>
					</td>
				</tr>


				<?php endforeach; ?>
                </tbody>
                <tfoot>
                	<tr>
                		<th colspan="3">Jumlah Barang <?php echo $sum_jumlah ?></th>
						<th colspan="2"><?php echo $sum_total ?></th>
					</tr>
                	<tr>
                		<th colspan="3">Total Semua</th>
						<th colspan="2"><?php echo $sum_total ?></th>
					</tr>
                </tfoot>
              </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a onclick="return confirm('Apakah data akan dihapus semua?')"  href="<?php echo site_url('transaksi/delete_all_item') ?>" class="btn btn-default">Hapus Semua</a>
                <a onclick="return confirm('Sudah selesai?')"  href="<?php echo site_url('transaksi/move_to_transaksi') ?>" class="btn btn-info pull-right">Selesai</a>
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <div class="modal" id="delete">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Barang</h4>
            </div>
            <div class="modal-body">                
                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>Kode Barang</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Harga</th>
					<th>Stok</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($barangs as $key => $value): ?>

				<tr>
					<td><?php echo $value->kd_barang ?></td>
					<td><a href="#" onclick="get_data('<?php echo $value->kd_barang ?>')"><?php echo $value->nama_barang; ?></a></td>
					<td><?php echo $value->jenis ?></td>
					<td><?php echo $value->harga_barang ?></td>
					<td><?php echo $value->stok ?></td>
				</tr>

				<?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	<?php echo "var url='".base_url()."';"; ?>

	function get_data(id) 
	{
		$("#delete").modal('hide');
	
		$.ajax({
					url: url+'barang/get_data/'+id,
					type: 'GET',
					dataType: 'json',
					success:function(data){
						$("#id_kode").val(data.kd_barang);
						$("#id_nama").val(data.nama_barang);
						$("#id_harga").val(data.harga_barang);
						$("#id_stok").val(data.stok);
					},
					error:function(e){
						alert(e);
					}
				})
	}

	function hitung(){
			$("#id_jumlah").keypress(function(event){
				if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
					event.preventDefault();
				}
			})
			var a = $("#id_harga").val();
			var b = $("#id_jumlah").val();
			var c = a * b;
			$("#id_total").val(c);
		}

	function validation()
	{
		var stok = parseInt($("#id_stok").val());
		var jumlah = parseInt($("#id_jumlah").val());
		var total = parseInt($("#id_total").val());
		if (jumlah > stok) {
			alert('Stok hanya ada ' +stok);
		}
		else if(jumlah == 0 || total == 0) {
			alert("stok tidak boleh kosong")
		}
		else{
			var kode = $("#id_kode").val();
			var jumlah = $("#id_jumlah").val();
			var total  = $("#id_total").val();
			$.ajax({
				url: url+'transaksi/process_tmp',
				type: 'POST',
				data: "kd_barang="+$("#id_kode").val()+"&jumlah_beli="+jumlah+"&sub_total="+total,
				dataType: 'html',
				success: function(pesan) {
					if (pesan == "success"){
						window.location.href=url+"transaksi";
					}else
						alert("gagal");
				},
				error: function(e){
					alert(e);
				}
			});
		}
	}
</script>


  


