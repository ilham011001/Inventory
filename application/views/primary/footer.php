<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


<!-- DataTables -->
<script src="<?php echo base_url() ?>AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>AdminLTE/dist/js/demo.js"></script>



<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  /* ==================================================
    FUNGSI DatePicker 
    =====================================================*/
    $('.datepicker_year').datepicker({
	      minViewMode: 2,
	      format: "yyyy",
	      autoclose:true
	  });

    $('.datepicker_all').datepicker({
	      format: "yyyy-mm-dd",
	      autoclose:true
	  });
 </script>



</body>
</html>
