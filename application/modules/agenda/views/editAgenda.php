<section class="panel">
    <header class="panel-heading">
        Edit Agenda
    </header>
<div class="panel-body">
<form role="form" action="#" method="POST">
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
    </div>
    <div class="row form-group">
        <div class="col-lg-12 ">
            <label>Rundown Acara</label>

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
                    <input type="hidden" class="form-control" id="countrundown" name="countrundown" value="1">
                </div>
                <div class="col-lg-4">
                    <label >Keterangan</label>
                    <textarea class="form-control" rows="1" id="tketrd" placeholder="Keterangan Tambahan"></textarea>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <div class="col-lg-2 form-group">
            <button type="button" onclick="plustable()" class="btn btn-sm btn-round btn-warning pull-right" ><i class="fa fa-plus"></i> Tambahkan</button>
        </div>
    </div>
    <div class="row form-group">
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
    <div class="row" id="containerrundown">
        <div class="row">
            <div class="col-lg-12">
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

    function minus2(id, id2)
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
            var oi = "<tr id=\"rowrd" + count + "\"><td>" + count + "</td><td>" + $('#tnamard').val() + "</td><td>" + $('#tjamrd').val() + "</td><td>" + $('#ttempatrd').val() + "</td><td>" + $('#tpicrd').val() + "</td><td>" + $('#tketrd').val() + "</td><td><button type=\"button\" title=\"Klik Untuk Hapus Rundown Ini\" onclick=\"minus2('rowrd" + count + "','rowsubmit" + count + "')\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"btn btn-sm btn-round btn-danger\"><i class=\"fa fa-minus\"></i></button></td></tr>";
            $('#tablerundown').append(oi);


            var oit = "<div class=\"row\" id=\"rowsubmit" + count + "\"><div class=\"col-lg-12\"><input type=\"hidden\" class=\"form-control\" id=\"namard" + count + "\" name=\"namard" + count + "\" ><input type=\"hidden\" class=\"form-control\" id=\"jamrd" + count + "\" name=\"jamrd" + count + "\" ><input type=\"hidden\" class=\"form-control\" id=\"tempatrd" + count + "\" name=\"tempatrd" + count + "\" ><input type=\"hidden\" class=\"form-control\" id=\"picrd" + count + "\" name=\"picrd" + count + "\" ><input type=\"hidden\" class=\"form-control\" id=\"ketrd" + count + "\" name=\"ketrd" + count + "\" ></div></div>";
            $('#containerrundown').append(oit);

            $('#namard' + count).val($('#tnamard').val());
            $('#jamrd' + count).val($('#tjamrd').val());
            $('#tempatrd' + count).val($('#ttempatrd').val());
            $('#picrd' + count).val($('#tpicrd').val());
            $('#ketrd' + count).val($('#tketrd').val());
            $('#countrundown').val(numb);
        }
        else
        {
            alert('Data Tidak Lengkap');
        }
    }
</script>