
<form role="form" action="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"]?>/editinmail" method="POST">
    <div class="row">
        <center>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="nomorsurat"><b>JUDUL SURAT</b></label>
                <input type="text" class="form-control" name="judul" value="<?php echo $surat[0]->judul; ?>" placeholder="Judul">
            </div>
        </div>
        </center>
    </div>
    <div class="row">
        <div class="col-md-6 " >
            <div class="form-group">
                <label for="nomorsurat">Jurnal</label>
                <input type="hidden" name="idsurat" value="<?php echo $surat[0]->id; ?>" >
                <input type="text" readonly class="form-control" name="jurnal" placeholder="Jurnal"  value="<?php if(!empty($surat[0]->jurnal)){echo $surat[0]->jurnal;} else{echo $jurnal;} ?>">
            </div>
            <div class="form-group">
                <label for="nomorsurat">Nomor Surat</label>
                <input type="text" class="form-control" name="nomor" placeholder="Nomor Surat" value="<?php echo $surat[0]->nomor; ?>">
                <input id="modesimpan" type="hidden" class="form-control" name="modesimpan" value="" >
            </div>
            <div class="form-group">
                <label for="nomorsurat">Tanggal Surat</label>
                <input class="form-control form-control-inline input-medium default-date-picker" name="tanggal_surat" size="16" type="text" value="<?php echo $surat[0]->tanggal; ?>">
            </div>
            <div class="form-group">
                <label for="nomorsurat">Perihal</label>
                <input type="text" class="form-control" name="perihal" placeholder="Perihal" value="<?php echo $surat[0]->perihal; ?>">
            </div>
            <div class="form-group icheck minimal">
                <label for="nomorsurat">Sifat</label>
                <?php $tempsifat = explode('|', $surat[0]->sifat);?>
                <div class="checkbox single-row">
                    <label>
                        <input type="checkbox" name="mendesak" value="Mendesak" <?php foreach ($tempsifat as $v) { if($v == 'Mendesak') {echo "checked";} } ?> >
                        Mendesak
                    </label>
                </div>
                <div class="checkbox single-row">
                    <label>
                        <input type="checkbox" name="rahasia" value="Rahasia" <?php foreach ($tempsifat as $v) { if($v == 'Rahasia') {echo "checked";} } ?>>
                        Rahasia
                    </label>
                </div>
                <div class="checkbox single-row">
                    <label>
                        <input type="checkbox" name="penting" value="Penting" <?php foreach ($tempsifat as $v) { if($v == 'Penting') {echo "checked";} } ?>>
                        Penting
                    </label>
                </div>
                <div class="checkbox single-row">
                    <label>
                        <input type="checkbox" name="biasa" value="Biasa" <?php foreach ($tempsifat as $v) { if($v == 'Biasa') {echo "checked";} } ?>>
                        Biasa
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6" >
            <div class="form-group">
                <label for="nomorsurat">Pengirim</label>
                <input type="text" class="form-control" name="pengirim" placeholder="Nama Pengirim" value="<?php echo $surat[0]->pengirim; ?>">
            </div>
            <div class="form-group">
                <label for="nomorsurat">Penerima</label>
                <input type="text" readonly="true" class="form-control" name="penerima" placeholder="Penerima" value="Ketua Umum">
            </div>
            <div class="form-group">
                <label for="nomorsurat">Tanggal Terima Surat</label>
                <input class="form-control form-control-inline input-medium default-date-picker" name="tanggal_terima" size="16" type="text" value="<?php echo $surat[0]->tanggal_terima; ?>">
            </div>
            <div class="form-group">
                <label for="nomorsurat">Kategori</label>
                <select class="form-control m-bot15" name="kategori">
                    <option <?php if (strpos($surat[0]->kategori, 'Undangan') !== false) echo "SELECTED"; ?>>Undangan</option>
                    <option <?php if (strpos($surat[0]->kategori, 'Proposal') !== false) echo "SELECTED"; ?>>Proposal</option>
                    <option <?php if (strpos($surat[0]->kategori, 'Pemberitahuan') !== false) echo "SELECTED"; ?>>Pemberitahuan</option>
                    <option <?php if (strpos($surat[0]->kategori, 'Rekomendasi') !== false) echo "SELECTED"; ?>>Rekomendasi</option>
                    <option <?php if (strpos($surat[0]->kategori, 'Ucapan Selamat') !== false) echo "SELECTED"; ?>>Ucapan Selamat</option>
                </select>

            </div>
            <div class="form-group">
                <label for="nomorsurat">Tembusan</label>
                <textarea name="tembusan" class="form-control" rows="6" placeholder="Pisahkan dengan koma bila lebih dari 1, tidak perlu menuliskan nomor urut"><?php echo $surat[0]->tembusan; ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="nomorsurat">Isi Surat</label>
                <textarea class="form-control ckeditor" name="isi" rows="6"><?php echo $surat[0]->isi; ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <span><i class="fa fa-paperclip"></i> </span>
                <?php if(!empty($surat[0]->lampiran)) { ?>
                
                <a href="<?php echo base_url('uploads').'/filesurat/'. $surat[0]->lampiran;?>">Unduh Lampiran</a>
                <?php } else { ?>
                <a>Tidak Ada Lampiran</a>
                <?php } ?>  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="exampleInputFile">File Lampiran</label>
                <br>
                <input type="file" id="exampleInputFile" name="filesurat">
                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
            </div>
            <input type="hidden" value="in" name="jenis_surat"/> 
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="submit" onclick="changemodesimpan('simpan')" class="btn btn-info pull-right">Simpan</button>
        </div>
        <div class="col-lg-6">
            <button type="submit" onclick="changemodesimpan('draft')" class="btn btn-warning pull-left">Simpan Draft</button>
        </div>
    </div>
</form>
<script>
    function changemodesimpan(mode)
    {
        $("#modesimpan").val(mode);
    }
</script>