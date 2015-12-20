<section class="panel">
    <header class="panel-heading">
        Detil Tamu
    </header>
    <div class="panel-body">
        <div class="col-md-2">
            <div class="btn-group pull-right" >
                <button data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <?php 
                    if($detil[0]->verifikasi==0)
                        { ?>
                        
                            
                                <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify2/1/'.$detil[0]->id ?>" ><i class="fa fa-check-circle"></i> Setujui</a></li>
                                <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify2/4/'.$detil[0]->id ?>" ><i class="fa fa-ban"></i> Tolak</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/edit/'.$detil[0]->id;?>"><i class="fa fa-edit"></i> Ubah</a></li>                       
                        <?php }
                    else if($detil[0]->verifikasi==1)
                        { ?>
                            <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify2/2/'.$detil[0]->id ?>" ><i class="fa fa-check"></i> Selesai</a></li>
                                <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/changeverify2/3/'.$detil[0]->id ?>" ><i class="fa fa-minus-circle"></i> Batal</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/edit/'.$detil[0]->id;?>"><i class="fa fa-edit"></i> Ubah</a></li>
                        <?php }
                        else
                        { ?>
                            
                                <li><a href="<?php echo base_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/edit/'.$detil[0]->id;?>"><i class="fa fa-edit"></i> Ubah</a></li>
                        <?php }?>
                    
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <strong><label>Status : 
                            <?php 
                            if($detil[0]->verifikasi == 0) { echo 'Ditinjau';}
                            else if($detil[0]->verifikasi == 1) { echo 'Disetujui';}
                            else if($detil[0]->verifikasi == 2) { echo 'Selesai';}
                            else if($detil[0]->verifikasi == 3) { echo 'Batal';}
                            else if($detil[0]->verifikasi == 4) { echo 'Ditolak';}
                            ?>
                        </label></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Nama</label>
                        <p>
                            <?php echo $detil[0]->nama ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Waktu Kunjungan</label>
                        <p>
                            <?php $tgl = date("d M Y", strtotime($detil[0]->waktu)); $jam = date("H:i", strtotime($detil[0]->waktu)); echo $tgl.' - Pukul '.$jam;  ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Telepon</label>
                        <p>
                            <?php echo $detil[0]->telp ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Instansi</label>
                        <p>
                            <?php echo $detil[0]->asal ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label >Keterangan</label>
                        <p>
                            <?php echo $detil[0]->keterangan ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="attachment-mail">
                        <strong><span>Lampiran :</span></strong>
                        <p>
                            <span><i class="fa fa-paperclip"></i> </span>
                            <?php if(isset($detil[0]->file)) { ?>
                                <a target="_blank" href="<?php echo base_url().'uploads/tamulampiran/'.$detil[0]->file;?>">Unduh Lampiran ( <?php echo $detil[0]->file ?> )</a>
                            <?php } else { echo '<a>Tidak Ada Lampiran</a>'; }  ?>
                            
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Foto</label>
                        <div class=" images documents item " >
                            <img style="height: 200px; width: 200px" src="<?php echo base_url(); ?>uploads/tamufoto/<?php echo $detil[0]->foto ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" >
                    <div class="form-group">
                        <label >Disposisi</label>
                        <p>
                            <?php echo $detil[0]->disposisi ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" >
                    <div class="form-group">
                        <label >Hasil Pertemuan</label>
                        <p>
                            <?php echo $detil[0]->hasil ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</section>