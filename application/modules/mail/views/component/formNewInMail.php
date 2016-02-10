<?php echo form_open_multipart('mail/'. $this->session->userdata["logged_in"]["privilege"].'/newMail');?>

                    <div class="row">
                        <center>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nomorsurat"><b>JUDUL SURAT</b></label>
                                <input required type="text" class="form-control" name="judul" placeholder="Judul">
                            </div>
                        </div>
                        </center>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 " >
                            <div class="form-group">
                                <label for="nomorsurat">Jurnal</label>
                                <input id="mode" type="hidden" class="form-control" name="mode" value="in" >
                                <input type="text" value="<?php if(!empty($jurnal)) { echo $jurnal; } ?>" readonly class="form-control" name="jurnal" placeholder="Jurnal">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Nomor Surat</label>
                                <input type="text" class="form-control" name="nomor" placeholder="Nomor Surat">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tanggal Surat</label>
                                <input size="16" type="text" value="" name="tanggal_surat" class="form-control form-control-inline input-medium default-date-picker">
                                <!--<input class="form-control form-control-inline input-medium default-date-picker"  id="dp5" name="tanggal_surat" size="16" type="text" value="">-->
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Perihal</label>
                                <input type="text" class="form-control" name="perihal" placeholder="Perihal">
                            </div>
                            <div class="form-group icheck minimal">
                                <label for="nomorsurat">Sifat</label>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="mendesak" value="Mendesak">
                                        Mendesak
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="rahasia" value="Rahasia">
                                        Rahasia
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="penting" value="Penting">
                                        Penting
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="biasa" value="Biasa">
                                        Biasa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label for="nomorsurat">Pengirim</label>
                                <input type="text" class="form-control" name="pengirim" placeholder="Nama Pengirim">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Penerima</label>
                                <input type="text" readonly="true" class="form-control" name="penerima" placeholder="Penerima" value="Ketua Umum">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tanggal Terima Surat</label>
                                <input class="form-control form-control-inline input-medium default-date-picker" name="tanggal_terima" size="16" type="text" value="">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Kategori</label>
                                <select class="form-control m-bot15" name="kategori">
                                    <option>Undangan</option>
                                    <option>Proposal</option>
                                    <option>Pemberitahuan</option>
                                    <option>Rekomendasi</option>
                                    <option>Ucapan Selamat</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tembusan</label>
                                <textarea name="tembusan" class="form-control" rows="6" placeholder="Pisahkan dengan koma bila lebih dari 1, tidak perlu menuliskan nomor urut"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nomorsurat">Isi Surat</label>
                                <textarea class="form-control ckeditor" name="isi" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputFile">File Lampiran</label>
                                <input type="file" id="exampleInputFile" name="filesurat" accept=".zip, .rar, .7zip|compress file/*">
                                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
                            </div>
                            <input type="hidden" value="in" name="jenis_surat"/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group icheck minimal">
                            <div class="checkbox single-row">
                                <label>
                                    <input type="checkbox" name="needagenda" >
                                    Buat Agenda
                                </label>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-lg-6 form-group">
                            <button type="submit" onclick="changemode('in')" class="btn btn-info pull-right">Simpan</button>
                        </div>
                        <div class="col-lg-6 form-group">
                            <button type="submit" onclick="changemode('draft')" class="btn btn-warning pull-left">Simpan Draft</button>
                        </div>
                    </div>
                    
                </form>
<script>
    function changemode(mode)
    {
        $("#mode").val(mode);
    }

</script>