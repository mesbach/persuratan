<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <strong>Pencarian Surat Lanjut</strong>
            </header>
            <div class="panel-body">
                <form target="_blank" role="form" action="<?php echo base_url(); ?>search/coord/resultmail" method="POST">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Kata Kunci Pencarian</label>
                                <input type="text" class="form-control" name="keyword" placeholder="Kata Kunci">
                                <span><i>Dapat diisi : No. Jurnal, Pengirim / Penerima, Perihal, Isi Surat dan Tembusan</i></span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label col-md-3">Interval Tanggal</label>

                            <div class="col-md-12">
                                <div class="icheck minimal">
                                    <label>
                                        <input type="checkbox" name="alltime" value="checked">
                                        Centang Bila Mencari di Semua Tanggal
                                    </label>
                                </div>
                                <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                    <input type="text" class="form-control dpd1" name="from">
                                    <span class="input-group-addon">Hingga</span>
                                    <input type="text" class="form-control dpd2" name="to">
                                </div>
                                <span class="help-block"><i>Tanggal Surat</i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label >Sifat</label>
                                <div class="icheck minimal">
                                    <div class="checkbox single-row">
                                        <label>
                                            <input type="checkbox" name="sifatsurat[]" value="mendesak">
                                            Mendesak
                                        </label>
                                    </div>
                                    <div class="checkbox single-row">
                                        <label>
                                            <input type="checkbox" name="sifatsurat[]" value="rahasia">
                                            Rahasia
                                        </label>
                                    </div>
                                    <div class="checkbox single-row">
                                        <label>
                                            <input type="checkbox" name="sifatsurat[]" value="penting">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="checkbox single-row">
                                        <label>
                                            <input type="checkbox" name="sifatsurat[]" value="biasa">
                                            Biasa
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nomorsurat">Jenis</label>
                                        <select class="form-control m-bot15" name="jenis">
                                            <option value="in">Surat Masuk</option>
                                            <option value="out">Surat Keluar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nomorsurat">Kategori</label>
                                        <select class="form-control m-bot15" name="kategori">
                                            <option value="">Semua Kategori</option>
                                            <option value="undangan">Undangan</option>
                                            <option value="proposal">Proposal</option>
                                            <option value="pemberitahuan">Pemberitahuan</option>
                                            <option value="rekomendasi">Rekomendasi</option>
                                            <option value="ucapan selamat">Ucapan Selamat</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary center-block"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </form>
            </div>
        </section>
    </div>

</div>
