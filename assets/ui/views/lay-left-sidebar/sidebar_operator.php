<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <?php $fungsi = $this->uri->segment(1, 0); ?>
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="<?php echo ($fungsi == 'dashboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>dashboard/operator">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li >
                <a href="<?php echo base_url(); ?>mail/operator/inbox" >
                    <i class="fa fa-envelope"></i>
                    <span>Surat</span>
                </a>
            </li>
            <li >
                <a href="<?php echo base_url(); ?>agenda/operator/calendarAgenda" >
                    <i class="fa fa-bell"></i>
                    <span>Agenda Kegiatan</span>
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
                </ul>
            </li>
        </ul>            </div>
    <!-- sidebar menu end-->
</div>