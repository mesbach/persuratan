<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <?php $fungsi = $this->uri->segment(1, 0); ?>
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="<?php echo ($fungsi == 'dashboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>dashboard/coord">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li >
                <a href="<?php echo base_url(); ?>mail/coord/inbox" >
                    <i class="fa fa-envelope"></i>
                    <span>Surat</span>
                </a>
            </li>
            <!--<li class="sub-menu">
                <a  class="<?php echo ($fungsi == 'inbox') ? 'active' : ''; ?>" href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span>Surat Masuk</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo base_url(); ?>inbox/coord">Arsip Surat Masuk</a></li>
                    <li><a href="<?php echo base_url(); ?>inbox/coord/add">Tambah Surat Masuk</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="<?php echo ($fungsi == 'outbox') ? 'active' : ''; ?>" href="javascript:;">
                    <i class="fa fa-envelope-o"></i>
                    <span>Surat Keluar</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo base_url(); ?>outbox/coord">Arsip Surat Keluar</a></li>
                    <li><a href="<?php echo base_url(); ?>outbox/coord/add">Tambah Surat Keluar</a></li>
                </ul>
            </li>-->
            <li >
                <a href="<?php echo base_url(); ?>agenda/coord/calendarAgenda" >
                    <i class="fa fa-bell"></i>
                    <span>Agenda Kegiatan</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>guest/coord/">
                    <i class="fa fa-group"></i>
                    <span>Buku Tamu</span>
                </a>
            </li>
            <li>
                <a >
                    <i class="fa fa-files-o"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?php echo ($fungsi == 'advancedsearch') ? 'active' : ''; ?>" href="javascript:;">
                    <i class="fa fa-search"></i>
                    <span>Pencarian Lanjut</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Surat</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Tamu</a></li>
                </ul>
            </li>
        </ul>            </div>
    <!-- sidebar menu end-->
</div>