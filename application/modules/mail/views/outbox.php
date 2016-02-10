<?php 
$this->load->model('dashboard/model');
$notif = $this->model_mail->getNofication();
$surat = $this->model_mail->getOutbox();
//$surat = $this->model->getOutbox(100000);

?>
<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Surat Keluar ( <?php echo count($surat)?> )
                    <form action="#" class="pull-right mail-src-position">
                        <div class="input-append">
                            <input type="text" class="form-control " placeholder="Cari Surat">
                        </div>
                    </form>
                </h4>
            </header>
            <div class="panel-body minimal">
                <div class="mail-option">
                    <div class="chk-all">
                        <div class="pull-left mail-checkbox ">
                            <input type="checkbox" class="">
                        </div>

                        <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini all">
                                Tampilkan
                                <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Semua</a></li>
                                <li><a href="#"> Telah Dibaca</a></li>
                                <li><a href="#"> Belum Dibaca</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>
                    <div class="btn-group hidden-phone">
                        <a data-toggle="dropdown" href="#" class="btn mini blue">
                            Opsi
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Tandai Telah Dibaca</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button href="#myModal" data-toggle="modal" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Surat Keluar</button>
                    </div>
                    <?php if($this->session->userdata['logged_in']['privilege'] == 'coord') { ?>
                    <div class="btn-group">
                        <button href="#myModal2" data-toggle="modal" type="button" class="btn btn-warning"><i class="fa fa-plus"></i> Memo</button>
                    </div>
                    <?php } ?>

                    <ul class="unstyled inbox-pagination">
                        <li style="list-style: none"><span>1-50 of 124</span></li>
                        <li style="list-style: none">
                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li style="list-style: none">
                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="table-inbox-wrap ">
                    <table class="table table-inbox table-hover">
                        <tbody>
                            <?php foreach ($surat as $data) {
                                
                            ?>
                            
                            <tr class="">
                                 <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                <td class="view-message  dont-show"><a href="<?php echo base_url(); ?>mail/coord/viewMail/<?php echo $data->id?>"><?php echo $data->penerima;?></a></td>
                                <td class="view-message "><a href="<?php echo base_url(); ?>mail/coord/viewMail/<?php echo $data->id?>"><?php echo $data->judul;?></a></td>
                                <td class="view-message  inbox-small-cells"><?php if(!empty($data->lampiran)){?><i class="fa fa-paperclip"></i><?php }?></td>
                                <td class="view-message  text-right"><?php echo $data->tanggal;?></td>
                            </tr>
                            <?php }
                            ?>    
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Form Surat Keluar</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('component/formNewOutMail');?>
            </div>
        </div>
    </div>
</div>
<?php if($this->session->userdata['logged_in']['privilege'] == 'coord') { ?>
<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Buat Memo</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/newmemo" method="post">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="form-group">
                                <label for="nomorsurat">Isi</label>
                                <textarea class="form-control" name="isi" rows="6" placeholder="Memo ini akan menjadi draft / rancangan surat keluar yang akan dilengkapi oleh operator"></textarea>
                                <input type="hidden" name="jenissurat" value="out">
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!--//halo!-->
