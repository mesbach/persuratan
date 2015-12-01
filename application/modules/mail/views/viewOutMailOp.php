<?php $fungsi = $this->uri->segment(3, 0); ?>
<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Surat Keluar - No. Surat
                </h4>
            </header>
            <div class="panel-body minimal">
                <div class="panel-body ">

                    <div class="mail-header row">
                        <div class="col-md-8">
                            <h4 class="pull-left"> Perihal :  </h4>

                        </div>
                        <div class="col-md-4">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <span>Pemberitahuan Bahwa</span>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="mail-sender">
                        <div class="row">
                            <div class="col-md-8">
                                <span>dari </span>
                                <strong>Kapuspen Mabes TNI</strong>
                                kepada
                                <strong>Ketua Umum</strong>
                            </div>
                            <div class="col-md-4">
                                <p class="date"> 15 OKT 2015</p>
                            </div>
                        </div>
                    </div>
                    <div class="view-mail">
                        <p>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. </p>
                        <p>Porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices <a href="#">faucibus rutrum</a>. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. </p>
                        <p>Sodales vulputate urna, vel <a href="#">accumsan augue egestas ac</a>. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. </p>
                    </div>
                    <div class="attachment-mail">
                        <strong><span>Tembusan :</span></strong>
                        <ol>
                            <li>
                                Bapak A
                            </li>
                            <li>
                                Ibu B
                            </li>
                        </ol>  
                        <p>
                            <span><i class="fa fa-paperclip"></i> 1 Lampiran — </span>
                            <a href="#">Unduh Lampiran</a>

                        </p>
                    </div>
                    <div class="compose-btn pull-left">
                        <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                        <button class="btn btn-sm tooltips" data-original-title="Ubah" href="#modalUbah" data-toggle="modal" data-placement="top" title=""><i class="fa fa-edit"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalUbah" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Surat</h4>
            </div>
            <div class="modal-body">
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
                            <div class="form-group">
                                <label for="nomorsurat">Sifat</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Penting
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Mendesak
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Rahasia
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
                        <div class="col-lg-12"></div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputFile">File Lampiran</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
                            </div>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
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
                            <button type="button" data-dismiss="modal" class="btn btn-info pull-left">Batal</button>
                        </div>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>