<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <?php $fungsi = $this->uri->segment(1, 0); ?>
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="<?php echo ($fungsi == 'dashboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>dashboard/fo">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li >
                <a href="<?php echo base_url(); ?>guest/fo/" >
                    <i class="fa fa-group"></i>
                    <span>Buku Tamu</span>
                </a>
            </li>
            <li >
                <a href="#" >
                    <i class="fa fa-search"></i>
                    <span>Pencarian Lanjut</span>
                </a>
            </li>

        </ul>            </div>
    <!-- sidebar menu end-->
</div>