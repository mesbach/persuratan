<section class="panel">
    <header class="panel-heading tab-bg-dark-navy-blue ">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#listtamu">Daftar Tamu</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#formtamu">Form Tamu</a>
            </li>
        </ul>
    </header>
    <div class="panel-body">
        <div class="tab-content">
            <div id="listtamu" class="tab-pane active">
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading">
                                <strong>Daftar Tamu</strong>
                            </header>
                            <div class="panel-body">
                                <div class="row form-group">
                                    <div class="col-md-9">
                                        <label><i>*data mulai tanggal <?php echo date('d F Y', strtotime('-14 day')); ?></i></label>

                                    </div>
                                    <div class="col-md-3">
                                        
                                    </div>
                                </div>
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr >
                                                
                                                <th>Nama</th>
                                                <th>Tanggal & Waktu</th>
                                                <th>No. Telepon</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            foreach ($tamu as $value) {
                                                # code...
                                                ?>
                                                <tr >
                                                    
                                                    <td ><a target="_blank" href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu/<?php echo $value->id ?>"><?php echo $value->nama ?></a></td>
                                                    <td ><a target="_blank" href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu/<?php echo $value->id ?>"><?php $tgl = date("d M Y H:i", strtotime($value->waktu)); echo $tgl; ?></a></td>
                                                    <td ><a target="_blank" href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu/<?php echo $value->id ?>"><?php echo $value->telp ?></a></td>
                                                    <td ><a target="_blank" href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu/<?php echo $value->id ?>"><?php echo $value->keterangan ?></a></td>
                                                    <td >
                                                        <?php 
                                                        if($value->verifikasi==0){ echo '<span class="label label-warning" >Ditinjau</span>'; }
                                                        else if($value->verifikasi==1){ echo '<span class="label label-success" >Disetujui</span>'; }
                                                        else if($value->verifikasi==2){ echo '<span class="label label-info" >Selesai</span>'; }
                                                        else if($value->verifikasi==3){ echo '<span class="label label-danger" >Batal</span>'; }
                                                        else if($value->verifikasi==4){ echo '<span class="label label-danger" >Ditolak</span>'; }
                                                        ?>
                                                        
                                                    </td>
                                                    <td>

                                                                <?php 
                                                                if($value->verifikasi==0 && $this->session->userdata['logged_in']['privilege'] == 'coord')
                                                                    { ?>
                                                                        <div class="btn-group">
                                                                            <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                                                            <ul role="menu" class="dropdown-menu">
                                                                            <li><a href="<?php base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify/1/'.$value->id ?>" ><i class="fa fa-check-circle"></i> Setujui</a></li>
                                                                            <li><a href="<?php base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify/4/'.$value->id ?>" ><i class="fa fa-ban"></i> Tolak</a></li></ul>
                                                                        </div>
                                                                    <?php }
                                                                else if($value->verifikasi==1 && $this->session->userdata['logged_in']['privilege'] == 'coord')
                                                                    { ?>
                                                                        <div class="btn-group">
                                                                            <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                                                            <ul role="menu" class="dropdown-menu">
                                                                            <li><a href="<?php base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify/2/'.$value->id ?>" ><i class="fa fa-check"></i> Selesai</a></li>
                                                                            <li><a href="<?php base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify/3/'.$value->id ?>" ><i class="fa fa-minus-circle"></i> Batal</a></li></ul>
                                                                        </div>
                                                                    <?php }?>
                                                                

                                                    </td>
                                                </tr>
<?php } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr >
                                                
                                                <th>Nama</th>
                                                <th>Tanggal & Waktu</th>
                                                <th>No. Telepon</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                                <th>#</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
            <div id="formtamu" class="tab-pane">
<?php $this->load->view('component/formtamu'); ?>
            </div>
        </div>



        