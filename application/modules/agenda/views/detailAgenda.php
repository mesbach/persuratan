<section class="panel">
    <header class="panel-heading">
        Detil Agenda
        <div class="btn-group pull-right" >
            <button data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu">
                <?php if($agenda[0]->verifikasi!=3){ ?>
                <?php if($agenda[0]->verifikasi==0) { ?>
                    <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/changeverifiy2/1/<?php echo $agenda[0]->id; ?>" ><i class="fa fa-check"></i> Setujui</a></li>
                <?php } ?>
                <?php if($agenda[0]->verifikasi==1) { ?>
                    <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/changeverifiy2/2/<?php echo $agenda[0]->id; ?>" ><i class="fa fa-check"></i> Selesai</a></li>
                <?php } ?>
                <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/changeverifiy2/3/<?php echo $agenda[0]->id; ?>" ><i class="fa fa-minus-circle"></i> Batal</a></li>
                <li class="divider"></li>
                <?php } ?>
                <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/editAgenda/<?php echo $agenda[0]->id; ?>"><i class="fa fa-edit"></i> Ubah</a></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
            </ul>
        </div>
    </header>
    <div class="panel-body">
        <div class="col-md-6">
            <?php if(!empty($agenda[0]->surat)) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Dasar Surat ( if exist )</label>
                        <p>
                            Nama Surat - No Jurnal (masuk) / No Surat ( Keluar )
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Nama Agenda</label>
                        <p>
                            <?php echo $agenda[0]->judul ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tanggal & Waktu Mulai</label>
                        <p>
                            <?php $jam = date("d M Y", strtotime($agenda[0]->awal));$wkt = date("H:i", strtotime($agenda[0]->awal)); echo $jam.' - '.$wkt.' WIB';?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tanggal & Waktu Selesai</label>
                        <p>
                            <?php $jam = date("d M Y", strtotime($agenda[0]->akhir));$wkt = date("H:i", strtotime($agenda[0]->akhir)); echo $jam.' - '.$wkt.' WIB';?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tempat Agenda</label>
                        <p>
                            <?php echo $agenda[0]->tempat ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label >Keterangan</label>
                        <p>
                            <?php echo $agenda[0]->isi ?>
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <div class="col-lg-12" id="containerpendamping">
                    <label>Status : </label> 
                    <?php 
                    if($agenda[0]->verifikasi==0){ echo '<span class="label label-warning" >Ditinjau</span>'; }
                    else if($agenda[0]->verifikasi==1){ echo '<span class="label label-success" >Disetujui</span>'; }
                    else if($agenda[0]->verifikasi==2){ echo '<span class="label label-info" >Selesai</span>'; }
                    else if($agenda[0]->verifikasi==3){ echo '<span class="label label-danger" >Batal</span>'; }
                    ?>
                    
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" id="containerpendamping">
                    <label>Pendamping</label> 
                    <div class="row form-group">
                        <div class="col-md-12">
                            <ol>
                                <?php foreach ($pendamping as $v) {
                                    echo '<li>'.$v->nama.' - '.$v->telp.'</li>';
                                     
                                 } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" >
                    <label>Satpassus</label>
                    <div class="row form-group" >
                        <div class="col-md-12">
                            <ol>
                                <?php foreach ($satpassus as $v) {
                                    echo '<li>'.$v->nama.' - '.$v->telp.'</li>';
                                     
                                 } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" >
                    <label>Lampiran</label>
                    <p>
                        <span><i class="fa fa-paperclip"></i> </span>
                            <?php if(isset($agenda[0]->file)) { ?>
                                <a target="_blank" href="<?php echo base_url().'uploads/fileagenda/'.$agenda[0]->file;?>">Unduh Lampiran ( <?php echo $agenda[0]->file ?> )</a>
                            <?php } else { echo '<a>Tidak Ada Lampiran</a>'; }  ?>
                    </p>

                </div>
            </div>


        </div>
        <div class="row form-group">
            <div class="col-lg-12 ">
                <label>Rundown Acara</label>

            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12">
                <section class="panel">

                    <section id="flip-scroll">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Jam</th>
                                    <th>Tempat</th>
                                    <th>PIC</th>
                                    <th>Keterangan</th>
                                    
                                </tr>
                            </thead>
                            <tbody id="tablerundown">
                                <?php foreach ($rundown as $v) { ?>
                                     <tr>
                                        <td><?php echo $v->nama; ?></td>
                                        <td><?php $jam = date("d M Y", strtotime($v->waktu));$wkt = date("H:i", strtotime($v->waktu)); echo $jam.' - '.$wkt.' WIB';?></td>
                                        <td><?php echo $v->tempat; ?></td>
                                        <td><?php echo $v->pic; ?></td>
                                        <td><?php echo $v->keterangan; ?></td>
                                        
                                    </tr>
                                 <?php } ?>
                                
                            </tbody>
                        </table>
                    </section>


                </section>
            </div>
        </div>
        <div class="row" id="containerrundown">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>

    </div>
</section>

