<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <?php $fungsi = $this->uri->segment(1, 0); ?>
        <?php $fungsi2 = $this->uri->segment(3, 0); ?>
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
                <a class="<?php echo ($fungsi == 'search') ? 'active' : ''; ?>" href="javascript:;">
                    <i class="fa fa-search"></i>
                    <span>Pencarian Lanjut</span>
                </a>
                <ul class="sub">
                    <li class="<?php echo ($fungsi2 == 'searchmail') ? 'active' : ''; ?>" ><a href="<?php echo base_url(); ?>search/coord/searchmail">Surat</a></li>
                    <li class="<?php echo ($fungsi2 == 'searchagenda') ? 'active' : ''; ?>" ><a href="<?php echo base_url(); ?>search/coord/searchagenda">Agenda</a></li>
                    <li class="<?php echo ($fungsi2 == 'searchguest') ? 'active' : ''; ?>" ><a href="<?php echo base_url(); ?>search/coord/searchguest">Tamu</a></li>
                </ul>
            </li>
        </ul>            </div>
    <!-- sidebar menu end-->
</div>