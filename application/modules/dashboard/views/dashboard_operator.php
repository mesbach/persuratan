<!--mini statistics start-->
<div class="row">
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-envelope"></i></span>
            <div class="mini-stat-info" onclick="window.location = '<?php echo site_url(); ?>mail/coord/inbox'">
                <span><?php echo count($inbox); ?></span>
                Surat Masuk Bulan Ini
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-envelope-o"></i></span>
            <div class="mini-stat-info" onclick="window.location = '<?php echo site_url(); ?>mail/coord/outbox'">
                <span><?php echo count($outbox); ?></span>
                Surat Keluar Bulan Ini
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-bell-o"></i></span>
            <div class="mini-stat-info">
                <span></span>
                Agenda Bulan Ini
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
                <!--ul class="event-list">
                    <li>Ceramah Gedung A @ 3:30 <a href="#" class="event-close"></a></li>
                    <li>Coffee meeting with B @ 4:30 <a href="#" class="event-close"></a></li>
                    <li>Skypee conf with C @ 5:45 <a href="#" class="event-close"></a></li>
                    <li>Peresmian @ 7:00 <a href="#" class="event-close"></a></li>
                    <li>Dinner with Y @ 9:30 <a href="#" class="event-close"></a></li>

                </ul!-->
                <!--input type="text" class="form-control evnt-input" placeholder="NOTES"-->
            </div>
        </div>
    </div>
</div>
