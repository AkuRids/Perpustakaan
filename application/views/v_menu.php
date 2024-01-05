<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/dist/img/amikom.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Amikom</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li><a href="<?= base_url()?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></i>
        <li><a href="<?= base_url()?>anggota"><i class="fa fa-user"></i> Data Anggota </a></li>
				<li><a href="<?= base_url()?>buku"><i class="fa fa-book"></i> Data Buku</a></li>
				<li><a href="<?= base_url()?>peminjaman"><i class="fa fa-desktop"></i> Data Peminjaman</a></li>
        <li><a href="<?= base_url()?>pengembalian"><i class="fa fa-desktop"></i> Data Pengembalian</a></li>
        <hr>
        <li><a href="<?= base_url()?>login/logout"><i class="fa fa-sign-out"></i> Log Out </a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
