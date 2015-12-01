<form role="form" action="#" method="POST">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="namatamu" placeholder="Nama Tamu / Ketua Rombongan">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" name="nohptamu" placeholder="No HP Tamu / Ketua Rombongan">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Instansi</label>
                <input type="text" class="form-control" name="instansitamu" placeholder="Asal Instansi">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: auto; height: 100px;">
                        <img src="<?php echo base_url(); ?>assets/ui/images/404.png" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" class="default" />
                        </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label >Keterangan</label>
                <textarea class="form-control" name="keterangantamu" rows="4"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label >Disposisi</label>
                <textarea class="form-control" name="keterangantamu" rows="4"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label >Hasil Pertemuan</label>
                <textarea class="form-control" name="hasilpertemuan" rows="4"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="exampleInputFile">File Lampiran</label>
                <input type="file" id="exampleInputFile" name="filetamu">
                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
            </div>
        </div>
    </div>
    <?php if ($this->session->userdata['logged_in']['privilege'] == 'coord') { ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="icheck minimal">
                    <div class="checkbox single-row">
                        <label>
                            <input type="checkbox" name="mendesak" value="mendesak">
                            <strong>Informasi ini Dapat Diakses Publik</strong>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success center-block">Simpan</button>
            </div>
        </div>
    </div>


</form>