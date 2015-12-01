<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Draft Surat Keluar
                </h4>
            </header>
            <div class="panel-body minimal">
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

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputFile">File Lampiran</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-info center-block">Update</button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success center-block">Simpan</button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger center-block">Hapus</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>