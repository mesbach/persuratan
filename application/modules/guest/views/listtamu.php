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
                            <tr >
                                <td >1</td>
                                <td ><a href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu">Pak A</a></td>
                                <td >17 Nov 2015 Friday / 10:30</td>
                                <td >081234567821</td>
                                <td >Kunjungan Non Formal</td>
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
                                <td >2</td>
                                <td ><a href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu">Pak B</a></td>
                                <td >17 Nov 2015 Friday / 13:30</td>
                                <td >081234567111</td>
                                <td >Kunjungan Formal</td>
                                <td ><span class="label label-warning">Pending</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#" data-toggle="modal"><i class="fa fa-check-circle"></i> Setujui</a></li>
                                            <li><a href="#" data-toggle="modal"><i class="fa fa-ban"></i> Tolak</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td >3</td>
                                <td ><a href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu">Pak C</a></td>
                                <td >18 Nov 2015 Saturday / 09:30</td>
                                <td >081234567222</td>
                                <td >Kunjungan CCC</td>
                                <td ><span class="label label-info">Selesai</span></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td >4</td>
                                <td ><a href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu">Pak D</a></td>
                                <td >20 Nov 2015 Monday / 09:30</td>
                                <td >081234567333</td>
                                <td >Kunjungan DDD</td>
                                <td ><span class="label label-danger">Batal</span></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td >5</td>
                                <td ><a href="<?php echo site_url(); ?>guest/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/detailtamu">Pak E</a></td>
                                <td >21 Nov 2015 Tuesday / 09:30</td>
                                <td >081234567444</td>
                                <td >Kunjungan EEE</td>
                                <td ><span class="label label-danger">Ditolak</span></td>
                                <td>
                                </td>
                            </tr>
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