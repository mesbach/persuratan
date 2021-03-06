<?php 
$this->load->model('dashboard/model');
$surat = $this->model->getDraft(10000);

?>
<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Draft Surat ( <?php echo count($surat)?> )
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
                                Opsi
                                <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>
                    

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
                                <td class="view-message  dont-show"><a href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/viewMail/<?php echo $data->id?>"><?php if($data->jenis_surat=='in') {echo 'Surat Masuk';} else {echo 'Surat Keluar';}?></a></td>
                                <td class="view-message "><a href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/viewMail/<?php echo $data->id?>"><?php if(!empty($data->judul)) {echo $data->judul;} else {echo $data->isi;}?></a></td>
                                <td class="view-message  inbox-small-cells"><?php if(!empty($data->lampiran)){?><i class="fa fa-paperclip"></i><?php }?></td>
                                <td class="view-message  text-right"><?php $temp = date_create($data->tanggal_entry); $tgl = date_format($temp,'d M Y H:i:s'); echo $tgl;?></td>
                            </tr>
                            <?php 
                        }?> 
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>
</div>
