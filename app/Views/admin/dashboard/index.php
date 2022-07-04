<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo($bonmasuk)?></h3>

                <p>Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-inbox"></i>
              </div>
              <a href="<?php echo base_url(); ?>/boncontroller/tampil/masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo($bonterima)?></h3>

                <p>Diterima</p>
              </div>
              <div class="icon">
                <i class="far fa-clipboard"></i>
              </div>
              <a href="<?php echo base_url(); ?>/boncontroller/tampil/terima" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo($bonjalan)?></h3>

                <p>On Going</p>
              </div>
              <div class="icon">
                <i class="fas fa-spinner"></i>
              </div>
              <a href="<?php echo base_url(); ?>/boncontroller/tampil/ongoing" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo($selesai)?></h3>

                <p>Selesai</p>
              </div>
              <div class="icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <a href="<?php echo base_url(); ?>/boncontroller/tampil/selesai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>