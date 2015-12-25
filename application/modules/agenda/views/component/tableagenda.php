<section class="panel">
    <div class="panel-body">
        <div class="adv-table">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                    <tr >
                        
                        <th>Nama Agenda</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tempat</th>
                        <th>Pendamping</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id=1; foreach ($agenda  as $value) {
                        # code...
                    ?>
                    <tr>
                        
                        <td ><a href="<?php echo site_url(); ?>agenda/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailAgenda/<?php echo $value->id ?>"><?php echo $value->judul;?></a></td>
                        <td ><a href="<?php echo site_url(); ?>agenda/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailAgenda/<?php echo $value->id ?>"><?php $jam = date("d M Y", strtotime($value->awal));$wkt = date("H:i", strtotime($value->awal)); echo $jam.' - '.$wkt.' WIB';?></a></td>
                        <td ><a href="<?php echo site_url(); ?>agenda/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailAgenda/<?php echo $value->id ?>"><?php echo $value->tempat;?></a></td>
                        <td >
                            <?php  foreach ($pendamping as $value2) {
                                if($value2->agenda == $value->id){
                                    echo $value2->nama . " - ".$value2->telp."<br/>";
                                    //echo "asyalalsals - ". $value->id;
                                }
                                # code...
                                
                            }?>
                        </td>
                        <td >
                            <?php 
                            if($value->verifikasi==0){ echo '<span class="label label-warning" >Ditinjau</span>'; }
                            else if($value->verifikasi==1){ echo '<span class="label label-success" >Disetujui</span>'; }
                            else if($value->verifikasi==2){ echo '<span class="label label-info" >Selesai</span>'; }
                            else if($value->verifikasi==3){ echo '<span class="label label-danger" >Batal</span>'; }
                            ?>

                        </td>
                        
                        <td>
                            <?php if($value->verifikasi!=3){ ?>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <?php if($value->verifikasi==0) { ?>
                                        <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/changeverifiy/1/<?php echo $value->id; ?>" ><i class="fa fa-check"></i> Setujui</a></li>
                                    <?php } ?>
                                    <?php if($value->verifikasi==1) { ?>
                                        <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/changeverifiy/2/<?php echo $value->id; ?>" ><i class="fa fa-check"></i> Selesai</a></li>
                                    <?php } ?>
                                    <li><a href="<?php echo base_url(); ?>agenda/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/changeverifiy/3/<?php echo $value->id; ?>" ><i class="fa fa-minus-circle"></i> Batal</a></li>
                                </ul>
                            </div>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php }
                        # code...
                    ?>
                </tbody>
                <tfoot>
                    <tr >
                        
                        <th>Nama Agenda</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tempat</th>
                        <th>Pendamping</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
