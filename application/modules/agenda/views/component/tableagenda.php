<section class="panel">
    <div class="panel-body">
        <div class="adv-table">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                    <tr >
                        <th>#</th>
                        <th>Nama Agenda</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tempat</th>
                        <th>PIC</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id=1; foreach ($agenda  as $value) {
                        # code...
                    ?>
                    <tr>
                        <td ><?php echo $id; $id++;?></td>
                        <td ><a href="<?php echo site_url(); ?>agenda/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailAgenda"><?php echo $value->judul;?></a></td>
                        <td ><?php echo $value->awal;?></td>
                        <td ><?php echo $value->tempat;?></td>
                        <td >
                            <?php  foreach ($pendamping as $value2) {
                                if($value2->agenda == $value->id){
                                    echo $value2->nama . " - ".$value2->telp."<br/>";
                                    //echo "asyalalsals - ". $value->id;
                                }
                                # code...
                            }?>
                        </td>
                        <?php if($value->status=="disetujui"){?>
                            <td ><span class="label label-danger" ><?php echo $value->status?></span></td>
                        <?php }if($value->status=="selesai"){?>
                            <td ><span class="label label-success" ><?php echo $value->status?></span></td>
                        <?php }if($value->status=="berjalan"){?>
                            <td ><span class="label label-normal" ><?php echo $value->status?></span></td>
                            <?php }?>
                        <td>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" data-toggle="modal"><i class="fa fa-check"></i> Selesai</a></li>
                                    <li><a href="#" data-toggle="modal"><i class="fa fa-minus-circle"></i> Batal</a></li>
                                </ul>
                            </div>

                        </td>
                    </tr>
                    <?php }
                        # code...
                    ?>
                </tbody>
                <tfoot>
                    <tr >
                        <th>#</th>
                        <th>Nama Agenda</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tempat</th>
                        <th>PIC</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
<!--<section id="flip-scroll">
    <table class="table table-bordered table-striped table-condensed cf">
        <thead>
            <tr >
                <th>#</th>
                <th>Nama Agenda</th>
                <th>Tanggal & Waktu</th>
                <th>Tempat</th>
                <th>PIC</th>
                <th>Status</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td >1</td>
                <td >Acara A</td>
                <td >17 Nov 2015 Friday / 10:30</td>
                <td >Pacitan</td>
                <td >Pak B - 081234567821</td>
                <td ><span class="label label-warning">Pending</span></td>
                <td>
<?php if ($this->session->userdata['logged_in']['privilege'] == 'coord') { ?>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" data-toggle="modal"><i class="fa fa-check-circle"></i> Setujui</a></li>
                                    <li><a href="#" data-toggle="modal"><i class="fa fa-ban"></i> Tolak</a></li>
                                </ul>
                            </div>
<?php }; ?>
                </td>
            </tr>
            <tr>
                <td >2</td>
                <td >Acara B</td>
                <td >17 Nov 2015 Friday / 13:30</td>
                <td >Makassar</td>
                <td >Pak B - 081234567111</td>
                <td ><span class="label label-success" >Disetujui</span></td>
                <td>
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#" data-toggle="modal"><i class="fa fa-check"></i> Selesai</a></li>
                            <li><a href="#" data-toggle="modal"><i class="fa fa-minus-circle"></i> Batal</a></li>
                        </ul>
                    </div>

                </td>
            </tr>
            <tr>
                <td >3</td>
                <td >Acara C</td>
                <td >18 Nov 2015 Saturday / 09:30</td>
                <td >Jayapura</td>
                <td >Pak C - 081234567222</td>
                <td ><span class="label label-info">Selesai</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td >4</td>
                <td >Acara D</td>
                <td >20 Nov 2015 Monday / 09:30</td>
                <td >Meulaboh</td>
                <td >Pak DD - 081234567333</td>
                <td ><span class="label label-danger">Batal</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td >5</td>
                <td >Acara E</td>
                <td >21 Nov 2015 Tuesday / 09:30</td>
                <td >Banjarmasin</td>
                <td >Pak E - 081234567444</td>
                <td ><span class="label label-danger">Ditolak</span></td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
</section>-->
