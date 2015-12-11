<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <strong>Daftar Tamu</strong>
            </header>
            <div class="panel-body">
                <div class="row form-group">
                    <div class="col-md-9">
                        <label><i>*data <?php echo date('d F Y', strtotime('-1 months')); ?> - <?php echo date('d F Y', strtotime('+1 months')); ?></i></label>
                        
                    </div>
                    <div class="col-md-3">
                        <button href="#modalFormTamu" data-toggle="modal" type="button" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Tamu</button>
                    </div>
                </div>
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr >
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tanggal & Waktu</th>
                                <th>No. Telepon</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0;  foreach ($tamu as $value) {
                                # code...
                            ?>
                            <tr >
                                <td ><?php echo $i; $i++;?></td>
                                <td ><a href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu/<?php echo $value->id?>"><?php echo $value->nama?></a></td>
                                <td ><?php echo $value->waktu;?></td>
                                <td ><?php echo $value->telp?></td>
                                <td ><?php echo $value->keterangan?></td>
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
                            <?php }?>
                            
                        </tbody>
                        <tfoot>
                            <tr >
                                <th>#</th>
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
<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="modalFormTamu" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Form Tamu</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('component/formtamu'); ?>
            </div>
        </div>
    </div>
</div>