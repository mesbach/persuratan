<?php $fungsi = $this->uri->segment(3, 0); ?>

<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
        <section class="panel">
            <header class="panel-heading">
                <strong>Versi Surat</strong>
            </header>
            <div class="panel-body">
                <ol>
                    <?php
                    $a = 0;
                    foreach ($version as $v) {
                        if ($surat[0]->id == $v->id) {
                            echo '<strong><li><a style="font-size: 14px" href="' . base_url() . 'mail/' . $this->session->userdata["logged_in"]["privilege"] . '/viewMail/' . $v->id . '"> Versi ' . $a . '</a></li></strong>';
                        } else {
                            echo '<li><a href="' . base_url() . 'mail/' . $this->session->userdata["logged_in"]["privilege"] . '/viewMail/' . $v->id . '"> Versi ' . $a . '</a></li>';
                        }
                        $a++;
                    }
                    ?>
                </ol>
            </div>
        </section>

    </div>
    <div class="col-sm-9">
        <section class="panel">
            <div class="panel-body minimal">
                <div class="panel-body ">
                    <div class="mail-sender">
                        <div class="row">
                            <div class="col-md-3">
                                <h5><strong><?php if($surat[0]->jenis_surat == 'in') echo "Surat Masuk";
                    else echo "Surat Keluar"; ?> <?php if($surat[0]->isdraft == 1) echo ' - DRAFT'; ?></strong></h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="btn-group pull-right">
                                            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu">
                                                
                                                <?php if($surat[0]->jenis_surat == 'in') { ?><li><a href="#myModal" data-toggle="modal"><i class="fa fa-reply"></i> Balas</a></li><?php } ?>
                                                <?php if($this->session->userdata["logged_in"]["privilege"]=='coord' || ($this->session->userdata["logged_in"]["privilege"]=='operator' && $surat[0]->isdraft==1)) { ?>
                                                <li><a href="#modalUbah" data-toggle="modal"><i class="fa fa-edit"></i> Ubah</a></li>
                                                <?php } ?>
                                                <?php if($surat[0]->jenis_surat == 'in') { ?><li><a href="#myModal2" data-toggle="modal"><i class="fa fa-plus"></i> Komentar</a></li><?php } ?>
                                                <li><a href="<?php echo base_url('agenda').'/'. $this->session->userdata["logged_in"]["privilege"]?>/agendaByMail/<?php echo $surat[0]->id;?>"><i class="fa fa-calendar-o"></i> Buat Agenda</a></li>
                                                <li><a href="#"><i class="fa fa-print"></i> Print</a></li>
                                                <?php if($this->session->userdata["logged_in"]["privilege"]=='coord') { ?>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <center><h4><strong><?php echo $surat[0]->judul; ?></strong></h4></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Tanggal Terima</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php
                    if ($surat[0]->jenis_surat == 'in') {
                        $timestamp = strtotime($surat[0]->tanggal_terima);
                        $newDate = date('d-M-Y', $timestamp);
                        echo $newDate;
                    } else {
                        echo ' - ';
                    }
                    ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>No Jurnal</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php echo $surat[0]->jurnal; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Nomor Surat</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php echo $surat[0]->nomor; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Perihal</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php echo $surat[0]->perihal; ?></p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Tanggal Surat</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php
                                            $timestamp = strtotime($surat[0]->tanggal_surat);
                                            $newDate = date('d-M-Y', $timestamp);
                                            echo $newDate;
                                            ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Sifat</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php $sifat = explode('|', $surat[0]->sifat);
                                            foreach ($sifat as $v) {
                                                echo $v . ' ';
                                            } ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Dari</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php echo $surat[0]->pengirim; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Kepada</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>:  <?php echo $surat[0]->penerima; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-mail">

                        <div class="row">
                            <div class="col-md-12">
<?php echo $surat[0]->isi; ?>
                            </div>
                        </div>
                    </div>
                    <div class="attachment-mail">
                        <strong><span>Tembusan :</span></strong>
                        <ol>
                            <?php
                            $pieces = explode(",", $surat[0]->tembusan);
                            foreach ($pieces as $value) {
                                echo '<li>' . $value . '</li>';
                            }
                            ?>
                        </ol>

                        <p>
                            <span><i class="fa fa-paperclip"></i> </span>
                            <?php if (!empty($surat[0]->lampiran)) { ?>
                                <a href="<?php echo base_url('uploads') . '/filesurat/' . $surat[0]->lampiran; ?>">Unduh Lampiran</a>
<?php } else { ?>
                                <a>Tidak Ada Lampiran</a>
<?php } ?>
                        </p>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            foreach ($memo as $data) {
                                echo $data->nama . " - ";
                                echo $data->isi . "</br>";
                            }
                            ?>
                        </div>
                    </div>
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
<?php $this->load->view('component/formNewOutMail.php') ?>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Buat Memo Balasan</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?php echo base_url() ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/memo" method="POST">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="form-group">
                                <label for="nomorsurat">Isi</label>
                                <textarea class="form-control" rows="6" name="isi" placeholder="Memo ini akan komentar untuk surat"></textarea>                                
                                <input type="hidden" name="surat" value="<?php echo $surat[0]->id ?>"></input>                                
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

<?php if($this->session->userdata["logged_in"]["privilege"]=='coord' || ($this->session->userdata["logged_in"]["privilege"]=='operator' && $surat[0]->isdraft==1)){ ?>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalUbah" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Surat</h4>
            </div>
            <div class="modal-body">
<?php if ($surat[0]->jenis_surat == 'in') {
    $this->load->view('component/formEditInMail.php');
} else {
    $this->load->view('component/formEditOutMail.php');
}; ?>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="modalHapus" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Anda Akan Menghapus Surat ?</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-6 ">
                            <button type="button" class="btn btn-danger pull-right">Hapus</button>
                        </div>
                        <div class="col-md-6 ">
                            <button type="button" data-dismiss="modal"class="btn btn-info pull-left">Batal</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>