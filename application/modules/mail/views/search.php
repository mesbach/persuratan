<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Pencarian Arsip Surat
                    <form action="#" class="pull-right mail-src-position">
                        <div class="input-append">

                        </div>
                    </form>
                </h4>
            </header>
            <div class="panel-body minimal">
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="range">Tanggal Surat</label>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                            <input type="text" class="form-control dpd1" name="from">
                            <span class="input-group-addon">To</span>
                            <input type="text" class="form-control dpd2" name="to">
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 icheck minimal">
                        <div class="checkbox single-row">
                            <input type="checkbox" >
                            <label>Semua Tanggal</label>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">
                        <label for="sifat">Sifat</label>
                    </div>
                    <div class="col-md-5 icheck minimal">
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
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="keyword">Kata Kunci</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Kata Kunci">
                            <span class="help-block">Diisi Kata Kunci / Perihal / Pengirim</span>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-info center-block"><a style="color: #FFF" href="<?php echo base_url(); ?>mail/coord/searchresult">Cari</a> <i class="fa fa-search"></i></button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>
    </div>
</div>