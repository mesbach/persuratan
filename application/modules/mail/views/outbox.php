<?php 
$this->load->model('dashboard/model');
$surat = $this->model->getOutbox(100000);

?>
<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Surat Keluar <?php echo count($surat)?>
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
                    <div class="btn-group">
                        <button href="#myModal2" data-toggle="modal" type="button" class="btn btn-warning"><i class="fa fa-plus"></i> Memo</button>
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
                                <td class="view-message  dont-show"><a href="<?php echo base_url(); ?>mail/coord/viewMail/<?php echo $data->id?>"><?php echo $data->pengirim;?></a></td>
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
                <form role="form">
                    <div class="row">
                        <div class="col-md-6 " >
                            <div class="form-group">
                                <label for="nomorsurat">Nomor Surat</label>
                                <input type="text" class="form-control" id="nomorSurat" placeholder="Nomor Surat">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tanggal Surat</label>
                                <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="">

                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Perihal</label>
                                <input type="text" class="form-control" id="nomorSurat" placeholder="Perihal">
                            </div>
                            <div class="form-group icheck minimal">
                                <label for="nomorsurat">Sifat</label>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" value="">
                                        Mendesak
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" value="">
                                        Rahasia
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" value="">
                                        Penting
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" value="">
                                        Biasa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label for="nomorsurat">Pengirim</label>
                                <input type="text" class="form-control" value="Ketua Umum" readonly="true" id="nomorSurat" placeholder="Nama Pengirim">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Penerima</label>
                                <input type="text"  class="form-control" id="nomorSurat" placeholder="Nama Penerima">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Kategori</label>
                                <select class="form-control m-bot15">
                                    <option>Kategori 1</option>
                                    <option>Kategori 2</option>
                                    <option>Kategori 3</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tembusan</label>
                                <textarea class="form-control" rows="6" placeholder="Pisahkan dengan koma bila lebih dari 1, tidak perlu menuliskan nomor urut"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nomorsurat">Isi Surat</label>
                                <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-1">
                            <div class="form-group">
                                <label for="exampleInputFile">File Lampiran</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <button type="submit" class="btn btn-info pull-right">Simpan</button>
                        </div>
                        <div class="col-lg-6 form-group">
                            <button type="submit" class="btn btn-warning pull-left">Simpan Draft</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Buat Memo</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="form-group">
                                <label for="nomorsurat">Isi</label>
                                <textarea class="form-control" rows="6" placeholder="Memo ini akan menjadi draft / rancangan surat keluar yang akan dilengkapi oleh operator"></textarea>
                                <!--<input type="text" class="form-control" id="nomorSurat" placeholder="Pisahkan dengan koma bila lebih dari 1">-->
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

<!--//halo!-->
