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
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">4 Surat Belum Dibaca</p>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="subject">
                            <span class="from">Ketua MPR</span>
                            <span class="time">10 September 2015</span>
                        </span>
                        <span class="message">
                            Surat Masuk - Penting.
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="subject">
                            <span class="from">Panglima TNI</span>
                            <span class="time">10 September 2015</span>
                        </span>
                        <span class="message">
                            Surat Keluar - pemberitahuan
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="subject">
                            <span class="from">Kepolri</span>
                            <span class="time">10 September 2015</span>
                        </span>
                        <span class="message">
                            Surat Keluar - Pemberitahuan
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="subject">
                            <span class="from">Kepala BIN</span>
                            <span class="time">11 September 2015</span>
                        </span>
                        <span class="message">
                            Surat Masuk - Permohonan
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">Lihat Semua Surat</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Agenda 3 Hari Kedepan</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        
                        <div class="noti-info">
                            <a href="#">15:00, 13 September 2015 # Kunjungan 1.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        
                        <div class="noti-info">
                            <a href="#">09:00, 14 September 2015 # Kunjungan 2.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        
                        <div class="noti-info">
                            <a href="#">10:00, 15 September 2015 # Kunjungan 3.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url(); ?>assets/ui/images/user.png">
                <span class="username"><?php echo $this->session->userdata['logged_in']['nama']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profil</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Pengaturan</a></li>
                <li><a href="<?php echo base_url()?>login/login/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>