<?php if (isset($detil)) { echo form_open_multipart('guest/coord/submitedit/'.$detil[0]->id); } else { echo form_open_multipart('guest/coord/submitguest'); }?>
<!--<form role="form" action="#" method="POST">-->
<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="namatamu" placeholder="Nama Tamu / Ketua Rombongan" value="<?php if (isset($detil)) {
    echo $detil[0]->nama;
} ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" name="nohptamu" placeholder="No HP Tamu / Ketua Rombongan" value="<?php if (isset($detil)) {
    echo $detil[0]->telp;
} ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label>Instansi</label>
                        <input type="text" class="form-control" name="instansitamu" placeholder="Asal Instansi" value="<?php if (isset($detil)) {
    echo $detil[0]->asal;
} ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Waktu Kunjungan</label>
                        <input size="16" type="text" value="<?php echo date('d-m-Y H:i') ?>" name="waktukunjungan" class="form_datetime form-control" value="<?php if (isset($detil)) {
    echo $detil[0]->waktu;
} ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Foto Tamu</label>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: auto; height: 100px;">
                        <img src="<?php if (isset($detil)) {
    echo base_url(); ?>uploads/tamufoto/<?php echo $detil[0]->foto;
} else {
    echo base_url() . 'assets/ui/images/404.png';
} ?> " alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input name="fototamu" type="file" class="default" />
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
                <textarea class="form-control" name="keterangantamu" rows="4" ><?php if (isset($detil)) {
    echo $detil[0]->keterangan;
} ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label >Disposisi</label>
                <textarea class="form-control" name="disposisitamu" rows="4"><?php if (isset($detil)) {
    echo $detil[0]->disposisi;
} ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label >Hasil Pertemuan</label>
                <textarea class="form-control" name="hasilpertemuan" rows="4"><?php if (isset($detil)) {
    echo $detil[0]->hasil;
} ?></textarea>
            </div>
        </div>
    </div>
    <?php if (isset($detil)) {
        echo '
    
    <div class="row">
        <div class="col-lg-12">
            <div class="attachment-mail">
                <strong><span>Lampiran :</span></strong>
                <p>
                    <span><i class="fa fa-paperclip"></i> </span>
                    <a target="_blank" href="'.base_url().'uploads/tamulampiran/'.$detil[0]->file.'">Unduh Lampiran ( '.$detil[0]->file.' )</a>
                </p>
            </div>
        </div>
    </div>
    ';} ?>
    <div class="row">
        <div class="col-lg-12">

            <div class="form-group">
                <label for="exampleInputFile">File Lampiran</label>
                <input name="lampiran" type="file" accept=".pdf, .doc, .docx,.zip, .rar, .7zip|compress file/*" id="exampleInputFile" >
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
                                <input type="checkbox" <?php if (isset($detil) && $detil[0]->publik == 1) {
        echo 'checked="true"';
    } ?>  name="forpublic" value="yes">
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

</div>
<div class="col-md-2"></div>

</form>