<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $barang ?></h3>

              <p>Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <?php if ($this->session->userdata("level") == "admin"): ?>
            	<a href="<?= site_url('barang') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            <?php elseif($this->session->userdata("level") == "manager"): ?>
            	<a href="<?= site_url('report/barang') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <!-- ./col -->

        <?php if ($this->session->userdata("level") == "admin"): ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $distributor ?><sup style="font-size: 20px"></sup></h3>

              <p>Distributor</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= site_url('distributor') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
				<?php endif; ?>


				<?php if ($this->session->userdata("level") == "manager"): ?>
					
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $user ?></h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= site_url('user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <?php endif ?>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


    </section>
</div>

</div>
<!-- ./wrapper -->
