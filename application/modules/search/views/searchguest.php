<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <strong>Pencarian Tamu Lanjut</strong>
            </header>
            <div class="panel-body">
                <form target="_blank" role="form" action="<?php echo base_url(); ?>search/<?php echo $this->session->userdata['logged_in']['privilege']; ?>/resultguest" method="POST">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label >Kata Kunci Pencarian</label>
                            <input type="text" class="form-control" name="keyword" placeholder="Kata Kunci">
                            <span><i>Dapat diisi : Nama Tamu, Asal Instansi, Telepon / lainnya</i></span>
                        </div>
                    </div>
                    <div class="row">
                        <label class="control-label col-md-3">Interval Tanggal</label>
                        <div class="col-md-12">
                            <div class="icheck minimal">
                                    <label>
                                        <input type="checkbox" name="alltime" value="">
                                        Centang Bila Mencari di Semua Tanggal
                                    </label>
                                </div>
                            <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                <input type="text" class="form-control dpd1" name="from">
                                <span class="input-group-addon">Hingga</span>
                                <input type="text" class="form-control dpd2" name="to">
                            </div>
                            <span class="help-block"><i>Tanggal Terima Tamu</i></span>
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
