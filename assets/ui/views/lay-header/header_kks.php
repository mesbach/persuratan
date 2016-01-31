<!--logo start-->
<?php 
$this->load->model('dashboard/model');
$notif_surat = $data['notif_surat'] = $this->model->getUnreadmail();

?>
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
        <!-- settings start -->
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
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important"><?php if(count($notif_surat)>0){ echo count($notif_surat); }?></span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red"><?php echo count($notif_surat);?> Surat Belum Dibaca</p>
                </li>
                <?php foreach($notif_surat as $data){?>
                <li>
                    <a href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"]?>/viewMail/<?php echo $data->id?>">
                        
                        <span class="subject">
                            <span class="from"><?php echo $data->jurnal; ?></span>
                            <span class="time"><?php echo $data->tanggal_surat;?></span>
                        </span>
                        <span class="message">
                            <?php echo $data->perihal; ?>
                        </span>
                    </a>
                </li>
                <?php }?>
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
                <span class="badge bg-warning"></span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Agenda 0 Hari Kedepan</p>
                </li>
            </ul>
        </li>
    </ul>
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
                <li><a href="<?php echo base_url()?>profile/coord/"><i class=" fa fa-suitcase"></i>Profil</a></li>
                <li><a href="<?php echo base_url()?>setting/coord/"><i class="fa fa-cog"></i> Pengaturan</a></li>
                <li><a href="<?php echo base_url()?>login/login/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>