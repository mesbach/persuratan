
<form role="form" action="<?php echo base_url();?>mail/coord/newMail/out" method="POST">
                    <div class="row">
                        <div class="col-md-6 " >
                            <div class="form-group">
                                <label for="nomorsurat">Jurnal</label>
                                <input type="text" class="form-control" name="jurnal" placeholder="Jurnal"  value="<?php echo $surat[0]->jurnal;?>">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Nomor Surat</label>
                                <input type="text" class="form-control" name="nomor" placeholder="Nomor Surat" value="<?php echo $surat[0]->nomor;?>">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tanggal Surat</label>
                                <input class="form-control form-control-inline input-medium default-date-picker" name="tanggal_surat" size="16" type="text" value="<?php echo $surat[0]->tanggal;?>">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Perihal</label>
                                <input type="text" class="form-control" name="perihal" placeholder="Perihal" value="<?php echo $surat[0]->perihal;?>">
                            </div>
                            <div class="form-group icheck minimal">
                                <label for="nomorsurat">Sifat</label>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="mendesak" value="mendesak" <?php if(strpos($surat[0]->sifat,'mendesak') !== false )echo "checked";?> >
                                        Mendesak
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="rahasia" value="rahasia" <?php if(strpos($surat[0]->sifat,'rahasia') !== false )echo "checked";?>>
                                        Rahasia
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="penting" value="penting" <?php if(strpos($surat[0]->sifat,'penting') !== false )echo "checked";?>>
                                        Penting
                                    </label>
                                </div>
                                <div class="checkbox single-row">
                                    <label>
                                        <input type="checkbox" name="biasa" value="biasa" <?php if(strpos($surat[0]->sifat,'biasa') !== false )echo "checked";?>>
                                        Biasa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label for="nomorsurat">Pengirim</label>
                                <input type="text" class="form-control" name="pengirim" placeholder="Nama Pengirim" value="<?php echo $surat[0]->pengirim;?>">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Penerima</label>
                                <input type="text" readonly="true" class="form-control" name="penerima" placeholder="Penerima" value="Ketua Umum">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tanggal Terima Surat</label>
                                <input class="form-control form-control-inline input-medium default-date-picker" name="tanggal_terima" size="16" type="text" value="<?php echo $surat[0]->tanggal_terima;?>">
                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Kategori</label>
                                <select class="form-control m-bot15" name="kategori">
                                    <option <?php if(strpos($surat[0]->kategori,'Undangan') !== false )echo "SELECTED";?>>Undangan</option>
                                    <option <?php if(strpos($surat[0]->kategori,'Proposal') !== false )echo "SELECTED";?>>Proposal</option>
                                    <option <?php if(strpos($surat[0]->kategori,'Pemberitahuan') !== false )echo "SELECTED";?>>Pemberitahuan</option>
                                    <option <?php if(strpos($surat[0]->kategori,'Rekomendasi') !== false )echo "SELECTED";?>>Rekomendasi</option>
                                    <option <?php if(strpos($surat[0]->kategori,'Ucapan Selamat') !== false )echo "SELECTED";?>>Ucapan Selamat</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="nomorsurat">Tembusan</label>
                                <textarea name="tembusan" class="form-control" rows="6" placeholder="Pisahkan dengan koma bila lebih dari 1, tidak perlu menuliskan nomor urut"><?php echo $surat[0]->tembusan;?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nomorsurat">Isi Surat</label>
                                <textarea class="form-control ckeditor" name="isi" rows="6"><?php echo $surat[0]->isi;?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputFile">File Lampiran</label>
                                <input type="file" id="exampleInputFile" name="filesurat">
                                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
                            </div>
                            <input type="hidden" value="out" name="jenis_surat"/> 
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>