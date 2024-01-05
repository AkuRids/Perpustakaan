<style>
  .row {
    margin: 10px;
  }
</style>
<!-- Small boxes (Stat box) -->
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?= $anggota;?></h3>
              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people-outline"></i>
            </div>
            <a href="<?= base_url() ?>anggota" class="small-box-footer">Info selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $buku;?></h3>
              <p>Buku</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book-outline"></i>
            </div>
            <a href="<?= base_url() ?>buku" class="small-box-footer">Info selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $peminjaman;?></h3>
              <p>Buku Dipinjam</p>
            </div>
            <div class="icon">
              <i class="ion-clipboard"></i>
            </div>
            <a href="<?= base_url() ?>peminjaman" class="small-box-footer">Info selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $pengembalian;?></h3>
              <p>Buku Dikembalikan</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="<?= base_url() ?>pengembalian" class="small-box-footer">Info selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>