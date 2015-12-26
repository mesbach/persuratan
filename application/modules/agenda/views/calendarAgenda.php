<section class="panel">
    <header class="panel-heading tab-bg-dark-navy-blue ">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#kalender">Kalender</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#reqAgenda">Daftar Agenda</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#agenda">Form Agenda</a>
            </li>
        </ul>
    </header>
    <div class="panel-body">
        <div class="tab-content">
            <div id="kalender" class="tab-pane active">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-8">
                            <!-- page start-->
                            <div class="row">
                                <aside class="col-lg-12">
                                    <div id="calendar" class="has-toolbar"></div>
                                </aside>
                            </div>
                            <!-- page end-->

                        </div>
                        <div class="col-lg-2">

                        </div>

                    </div>
                </div>
            </div>
            <div id="reqAgenda" class="tab-pane">
                <?php $this->load->view('component/tableagenda');?>
            </div>
            <div id="agenda" class="tab-pane">
                <?php $this->load->view('component/formagenda');?>
            </div>
        </div>
    </div>
</section>

