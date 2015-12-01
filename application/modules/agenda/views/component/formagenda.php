
<form role="form" action="#" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Nama Agenda</label>
                        <input type="text" class="form-control" name="kegiatan" placeholder="Nama Agenda">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tanggal & Waktu</label>
                        <input class="form-control" type="datetime-local" name="bdaytime">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tempat Agenda</label>
                        <input type="text" class="form-control" name="tempat" placeholder="Tempat Agenda">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label >Keterangan</label>
                        <textarea class="form-control" name="isi" rows="4"></textarea>
                    </div>
                    <input type="hidden" class="form-control" id="countpendamping" name="countpendamping" placeholder="" value="1">
                    <input type="hidden" class="form-control" id="countsatpas" name="countsatpas" placeholder="" value="1">
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <div class="col-lg-12" id="containerpendamping">
                    <label>Pendamping</label> 
                    <button type="button" title="Klik Untuk Tambah Pendamping" data-placement="right" data-toggle="tooltip" class="btn btn-sm btn-round btn-primary" onclick="pluspen()"><i class="fa fa-plus"></i></button>
                    <div class="row form-group" style="margin-top: 5px">
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="npen1" placeholder="Nama Pendamping 1">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="hpen1" placeholder="No HP Pendamping 1">
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" id="containersatpas">
                    <label>Satpassus</label> 
                    <button type="button" title="Klik Untuk Tambah Satpassus" data-placement="right" data-toggle="tooltip" class="btn btn-sm btn-round btn-primary" onclick="plussat()"><i class="fa fa-plus"></i></button>
                    <div class="row form-group" style="margin-top: 5px">
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="nsat1" placeholder="Nama Satpassus 1">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="hsat1" placeholder="No HP Satpassus 1">
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <label >Hasil Agenda</label>
                        <textarea class="form-control" name="hasilagenda" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-group">
                <label>Rundown Acara</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="row form-group">
                <div class="col-lg-4">
                    <label >Nama</label>
                    <input type="text" class="form-control" id="tnamard" placeholder="Nama Acara">
                </div>
                <div class="col-lg-4">
                    <label >Waktu</label>
                    <input type="text" class="form-control" id="tjamrd" placeholder="Waktu Acara">
                </div>
                <div class="col-lg-4">
                    <label >Tempat</label>
                    <input type="text" class="form-control" id="ttempatrd" placeholder="Tempat Acara">
                </div>
            </div>
            <div class="row form-group">

                <div class="col-lg-4">
                    <label >PIC</label>
                    <input type="text" class="form-control" id="tpicrd" placeholder="PIC">
                    <input type="hidden" class="form-control" id="countrundown" value="1">
                </div>
                <div class="col-lg-4">
                    <label >Keterangan</label>
                    <textarea class="form-control" rows="1" id="tketrd" placeholder="Keterangan Tambahan"></textarea>
                </div>
                <div class="col-lg-4">
                    <label ></label>
                    <button type="button" onclick="plustable()" class="btn btn-sm btn-round btn-warning center-block" ><i class="fa fa-plus"></i> Tambahkan</button>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="row form-group">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">

                <section id="flip-scroll">
                    <table class="table table-bordered table-striped table-condensed cf">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kegiatan</th>
                                <th>Jam</th>
                                <th>Tempat</th>
                                <th>PIC</th>
                                <th>Keterangan</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody id="tablerundown">

                        </tbody>
                    </table>
                </section>


            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="exampleInputFile">File Lampiran</label>
                <input type="file" id="exampleInputFile" name="fileagenda">
                <p class="help-block">Berupa pdf / zip. Ukuran Maksimal 5Mb.</p>
            </div>
        </div>
    </div>
    <?php if ($this->session->userdata['logged_in']['privilege'] == 'coord') { ?>
        <div class="row form-group">
            <div class="col-md-12">
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
    <?php }; ?>
    <div class="row" >
        <div class="col-md-12">
            <button type="submit" class="btn btn-success center-block">Simpan</button>
        </div>
    </div>

    <div class="row" id="containerrundown">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>

</form>
