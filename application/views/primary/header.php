<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/datatables/dataTables.bootstrap.css">



  <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>AdminLTE/bootstrap/js/bootstrap.min.js"></script>

	<!-- SweetAlert -->
	<link rel="stylesheet" href="<?php echo base_url();?>plugins/sweetalert/sweetalert.css" />
	<script src="<?php echo base_url();?>plugins/sweetalert/sweetalert.min.js"></script>

	<!-- DatePicker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>plugins/datepicker/css/bootstrap-datepicker.css"/>	
	<script src='<?php echo base_url(); ?>plugins/datepicker/js/bootstrap-datepicker.min.js'></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IN</b>TY</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INVEN</b>TORY</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="<?php if ($this->session->flashdata('active') == "dashboard") echo "active" ?>">
          <a href="<?php echo site_url('dashboard') ?>">
            <i class="fa fa-calendar"></i> <span>Dashboard</span>
          </a>
        </li>

		<?php if ($this->session->userdata('level') == "admin"): ?>
        <li class="<?php if ($this->session->flashdata('active') == "barang") echo "active" ?>">
          <a href="<?php echo site_url('barang') ?>">
            <i class="fa fa-calendar"></i> <span>Barang</span>
          </a>
        </li>

        <li class="<?php if ($this->session->flashdata('active') == "merk") echo "active" ?>">
          <a href="<?php echo site_url('merk') ?>">
            <i class="fa fa-calendar"></i> <span>Merk</span>
          </a>
        </li>

        <li class="<?php if ($this->session->flashdata('active') == "distributor") echo "active" ?>">
          <a href="<?php echo site_url('distributor') ?>">
            <i class="fa fa-calendar"></i> <span>Distributor</span>
          </a>
        </li>


        <?php elseif($this->session->userdata('level') == "kasir"): ?>

				<li class="<?php if ($this->session->flashdata('active') == "transaksi") echo "active" ?>">
          <a href="<?php echo site_url('transaksi') ?>">
            <i class="fa fa-calendar"></i> <span>Transaksi</span>
          </a>
        </li>

        <?php elseif($this->session->userdata('level') == "manager"): ?>
        	<li class="<?php if ($this->session->flashdata('active') == "user") echo "active" ?>">
	          <a href="<?php echo site_url('user') ?>">
	            <i class="fa fa-calendar"></i> <span>User</span>
	          </a>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-folder"></i> <span>Report</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="<?php echo site_url('report/barang') ?>"><i class="fa fa-circle-o"></i> Semua Barang</a></li>
	            <li><a href="<?php echo site_url('report/barang_filter') ?>"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
	            <li><a href="<?php echo site_url('report/barang_stok') ?>"><i class="fa fa-circle-o"></i> Barang Habis</a></li>
	            <!-- <li><a href="<?php echo site_url('report/barang') ?>"><i class="fa fa-circle-o"></i> Transaksi</a></li> -->
	          </ul>
	        </li>
        <?php endif; ?>
        
        <li class="header">OTHER</li>
        <li><a href="<?php echo site_url('auth/process_logout') ?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>



