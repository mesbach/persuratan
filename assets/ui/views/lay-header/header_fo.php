<!--logo start-->
<div class="brand">

    <a href="<?php echo base_url(); ?>dashboard/<?php echo $this->session->userdata['logged_in']['privilege'] ?>" class="logo" style="color: whitesmoke">
        <img style="margin-left: -15px" src="<?php echo base_url(); ?>assets/ui/images/email_white_s.png" alt=""> Persuratan
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-group"></i>
                <span class="badge bg-success"></span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class=""> Kunjungan Tamu Baru</p>
                </li>
                
                <li class="external">
                    <a href="#">Lihat Semua Kunjungan</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url(); ?>assets/ui/images/user.png">
                <span class="username"><?php echo $this->session->userdata['logged_in']['nama']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo base_url()?>profile/fo/"><i class=" fa fa-suitcase"></i>Profil</a></li>
                <li><a href="<?php echo base_url()?>login/login/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>