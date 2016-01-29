<section class="panel">    
<header class="panel-heading">
        Form Agenda Berdasarkan Surat
    </header>
    <div class="panel-body">
<?php echo form_open_multipart('agenda/'. $this->session->userdata["logged_in"]["privilege"].'/save'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Dasar Surat</label>
                        <input type="text" value="<?php echo $surat[0]->judul; ?>" class="form-control" name="judulsurat" readonly="true">
                        <input type="hidden" value="<?php echo $surat[0]->id; ?>" class="form-control" name="surat">
                        <span><a class="help-block" target="_blank" href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"]?>/viewMail/<?php echo $surat[0]->id ?>">detil surat klik disni</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Nama Agenda</label>
                        <input type="text" class="form-control" name="judul" placeholder="Nama Agenda">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tanggal & Waktu Mulai</label>
                        <input size="16" type="text" name="awal" class="form_datetime form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tanggal & Waktu Selesai</label>
                        <input size="16" type="text" name="akhir" class="form_datetime form-control">
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
                    <?php if(isset($pendampingedit)) { $a=1; foreach ($pendampingedit as $v) {
                        echo '<div class="row form-group" style="margin-top: 5px">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="'.$v->nama.'" name="npen'.$a.'" placeholder="Nama Pendamping 1">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="'.$v->telp.'" name="hpen'.$a.'" placeholder="No HP Pendamping 1">
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>'; $a++;

                    }} else { ?>
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
                    <?php } ?>
                    
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" id="containersatpas">
                    <label>Satpassus</label> 
                    <button type="button" title="Klik Untuk Tambah Satpassus" data-placement="right" data-toggle="tooltip" class="btn btn-sm btn-round btn-primary" onclick="plussat()"><i class="fa fa-plus"></i></button>
                    <?php if(isset($satpassusedit)) { $b=1; foreach ($satpassusedit as $v) {
                        echo '<div class="row form-group" style="margin-top: 5px">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="'.$v->nama.'" name="nsat'.$b.'" placeholder="Nama Satpassus 1">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="'.$v->telp.'" name="hsat'.$b.'" placeholder="No HP Satpassus 1">
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>'; $b++;
                    }} else { ?>
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
                    <?php } ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <label >Hasil Agenda</label>
                        <textarea class="form-control" name="hasil" rows="3"><?php if (isset($agendaedit)) {echo $agendaedit[0]->hasil;}  ?></textarea>
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
                    <input size="16" type="text" value="<?php echo date('d-m-Y H:i') ?>" id="tjamrd" name="tjamrd" class="form_datetime form-control" value="">
                    <!--<input type="text" class="form-control" id="tjamrd" placeholder="Waktu Acara">-->
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
                    <input type="hidden" class="form-control" id="countrundown" name="countrundown" value="<?php if(isset($rundownedit)) { echo count($rundownedit)+1;} else { echo '1';} ?>">
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
                                
                                <th>Nama Kegiatan</th>
                                <th>Tanggal & Waktu</th>
                                <th>Tempat</th>
                                <th>PIC</th>
                                <th>Keterangan</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody id="tablerundown">
                                <?php if(isset($rundownedit)) { $c=1; foreach ($rundownedit as $v) { ?>
                            <tr id="rowrd<?php echo $c; ?>">
                                
                                <td><?php echo $v->nama; ?></td>
                                <td><?php $jam = date("d M Y", strtotime($v->waktu));$wkt = date("H:i", strtotime($v->waktu)); echo $jam.' - '.$wkt.' WIB';?></td>
                                <td><?php echo $v->tempat; ?></td>
                                <td><?php echo $v->pic; ?></td>
                                <td><?php echo $v->keterangan; ?></td>
                                <td><button type="button" title="Klik Untuk Hapus Rundown Ini" onclick="minus2('rowrd<?php echo $c; ?>','rowsubmit<?php echo $c; ?>')" data-placement="right" data-toggle="tooltip" class="btn btn-sm btn-round btn-danger"><i class="fa fa-minus"></i></button></td>
                            </tr>
                                <?php $c++;}} ?>
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
                <?php if(isset($agendaedit[0]->file)) { ?>
                <br><a target="_blank" href="<?php echo base_url().'uploads/fileagenda/'.$agendaedit[0]->file;?>">Unduh Lampiran ( <?php echo $agendaedit[0]->file ?> )</a>
                <?php } else { echo '<a>Tidak Ada Lampiran</a>'; }  ?>
                <input type="file" id="exampleInputFile" value="<?php if(isset($agendaedit[0]->file)) { echo base_url().'uploads/fileagenda/'.$agendaedit[0]->file;}?>" name="fileagenda" accept=".pdf,.zip, .rar, .7zip|compress file/*">
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
                                <input type="checkbox" <?php if (isset($agendaedit) && $agendaedit[0]->publik == 1) {
        echo 'checked="true"';
    } ?>  name="forpublic" value="yes">
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
                <?php if(isset($rundownedit)) { $d=1; foreach ($rundownedit as $v) {
                        echo '<div class="row" id="rowsubmit'.$d.'">
                                <div class="col-lg-12">
                                    <input type="hidden" value="'.$v->nama.'" class="form-control" id="namard'.$d.'" name="namard'.$d.'" >
                                    <input type="hidden" value="'.$v->waktu.'" class="form-control" id="jamrd'.$d.'" name="jamrd'.$d.'" >
                                    <input type="hidden" value="'.$v->tempat.'" class="form-control" id="tempatrd'.$d.'" name="tempatrd'.$d.'" >
                                    <input type="hidden" value="'.$v->pic.'" class="form-control" id="picrd'.$d.'" name="picrd'.$d.'" >
                                    <input type="hidden" value="'.$v->keterangan.'" class="form-control" id="ketrd'.$d.'" name="ketrd'.$d.'" >
                                </div>
                            </div>'; $d++;
                    }} ?>
                
            </div>
        </div>
    </div>

</form>
    </div>
</section>

<script>
    function pluspen()
    {
        var tes = $('#countpendamping').val();

        var count = parseInt(tes);
        var numb = count + 1;
        var oi = "<div class=\"row form-group\" id=\"row" + numb + "\"><div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"npen" + numb + "\" placeholder=\"Nama Pendamping " + numb + "\"></div><div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"hpen" + numb + "\" placeholder=\"No HP Pendamping " + numb + "\"></div><div class=\"col-md-2\"><button type=\"button\" title=\"Klik Untuk Hapus Pendamping\" onclick=\"minus('row" + numb + "')\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"btn btn-sm btn-round btn-danger\"><i class=\"fa fa-minus\"></i></button></div></div>";

        $('#containerpendamping').append(oi);
        $('#countpendamping').val(numb);
    }

    function minus(id)
    {
        $('#' + id).remove();
    }
    
    function minus2(id,id2)
    {
        $('#' + id).remove();
        $('#' + id2).remove();
    }

    function plussat()
    {
        var tes = $('#countsatpas').val();

        var count = parseInt(tes);
        var numb = count + 1;
        var oi = "<div class=\"row form-group\" id=\"rowsat" + numb + "\"><div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"nsat" + numb + "\" placeholder=\"Nama Satpassus " + numb + "\"></div><div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"hsat" + numb + "\" placeholder=\"No HP Satpassus " + numb + "\"></div><div class=\"col-md-2\"><button type=\"button\" title=\"Klik Untuk Hapus Satpassus\" onclick=\"minus('rowsat" + numb + "')\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"btn btn-sm btn-round btn-danger\"><i class=\"fa fa-minus\"></i></button></div></div>";

        $('#containersatpas').append(oi);
        $('#countsatpas').val(numb);
    }

    function plustable()
    {
        var tes = $('#countrundown').val();
        var count = parseInt(tes);
        var numb = count + 1;
        if ($('#tnamard').val() && $('#tjamrd').val() && $('#ttempatrd').val() && $('#tpicrd').val() && $('#tketrd').val())
        {
            var oi = "<tr id=\"rowrd" + count + "\"><td>" + $('#tnamard').val() + "</td><td>" + $('#tjamrd').val() + "</td><td>" + $('#ttempatrd').val() + "</td><td>" + $('#tpicrd').val() + "</td><td>" + $('#tketrd').val() + "</td><td><button type=\"button\" title=\"Klik Untuk Hapus Rundown Ini\" onclick=\"minus2('rowrd" + count + "','rowsubmit"+count+"')\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"btn btn-sm btn-round btn-danger\"><i class=\"fa fa-minus\"></i></button></td></tr>";
            $('#tablerundown').append(oi);
            
            
            var oit = "<div class=\"row\" id=\"rowsubmit"+count+"\"><div class=\"col-lg-12\"><input type=\"hidden\" class=\"form-control\" id=\"namard"+count+"\" name=\"namard"+count+"\" ><input type=\"hidden\" class=\"form-control\" id=\"jamrd"+count+"\" name=\"jamrd"+count+"\" ><input type=\"hidden\" class=\"form-control\" id=\"tempatrd"+count+"\" name=\"tempatrd"+count+"\" ><input type=\"hidden\" class=\"form-control\" id=\"picrd"+count+"\" name=\"picrd"+count+"\" ><input type=\"hidden\" class=\"form-control\" id=\"ketrd"+count+"\" name=\"ketrd"+count+"\" ></div></div>";
            $('#containerrundown').append(oit);
            
            $('#namard'+count).val($('#tnamard').val());
            $('#jamrd'+count).val($('#tjamrd').val());
            $('#tempatrd'+count).val($('#ttempatrd').val());
            $('#picrd'+count).val($('#tpicrd').val());
            $('#ketrd'+count).val($('#tketrd').val());
            $('#countrundown').val(numb);
        }
        else
        {
            alert('Data Tidak Lengkap');
        }
    }
</script>
