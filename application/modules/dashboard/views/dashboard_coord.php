<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-envelope"></i></span>
            <div class="mini-stat-info" onclick="window.location = '<?php echo site_url(); ?>mail/coord/inbox'">
                <span><?php echo count($inbox); ?></span>
                Surat Masuk <?php echo date('M Y'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-envelope-o"></i></span>
            <div class="mini-stat-info" onclick="window.location = '<?php echo site_url(); ?>mail/coord/outbox'">
                <span><?php echo count($outbox); ?></span>
                Surat Keluar <?php echo date('M Y'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-group"></i></span>
            <div class="mini-stat-info">
                <span><?php echo $jml[0]->jml; ?></span>
                Tamu Bulan <?php echo date('M Y'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-bell-o"></i></span>
            <div class="mini-stat-info">
                <span><?php echo count($agenda); ?></span>
                Agenda Bulan <?php echo date('M Y'); ?>
            </div>
        </div>
    </div>
</div>
<!--mini statistics end-->


<div class="row">
    <div class="col-md-12">
        <div class="event-calendar clearfix">
            <div class="col-lg-9 calendar-block">
                <section class="panel">
                    <div class="panel-body">
                        <!-- page start-->
                        <div class="row">
                            <aside class="col-lg-1">

                                <div id="external-events">
                                </div>
                            </aside>
                            <aside class="col-lg-10 center">
                                <div id="calendar" class="has-toolbar fc"></div>
                            </aside>
                            <aside class="col-lg-1">

                                <div id="external-events">
                                </div>
                            </aside>
                        </div>
                        <!-- page end-->
                    </div>
                </section>
            </div>
            <div class="col-lg-3 event-list-block">
                <div class="cal-day">
                    <span>Agenda Ketua Umum</span>
                    Hari Ini
                </div>
                <ul class="event-list">
                    <?php foreach ($agendatoday as $v) { ?>
                    <li>
                        <p style="color: white; text-align: left">Jam <?php echo $v->awal?></p>
                        <a href="<?php echo site_url(); ?>agenda/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailAgenda/<?php echo $v->id ?>" style="color: white"><i><?php echo $v->judul ?></i></a>
                    </li>
                    <?php } ?>
                    

                </ul>
                <!--input type="text" class="form-control evnt-input" placeholder="NOTES"-->
            </div>
        </div>
    </div>
</div>

