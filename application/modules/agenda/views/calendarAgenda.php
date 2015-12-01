<section class="panel">
    <header class="panel-heading tab-bg-dark-navy-blue ">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#kalender">Kalendar</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#reqAgenda">Daftar Agenda</a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#agenda">Form Agenda</a>
            </li>
        </ul>
    </header>
    <div class="panel-body">
        <div class="tab-content">
            <div id="kalender" class="tab-pane active">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-8">
                            <!-- page start-->
                            <div class="row">
                                <aside class="col-lg-12">
                                    <div id="calendar" class="has-toolbar"></div>
                                </aside>
                            </div>
                            <!-- page end-->

                        </div>
                        <div class="col-lg-2">

                        </div>

                    </div>
                </div>
            </div>
            <div id="reqAgenda" class="tab-pane">
                <?php $this->load->view('component/tableagenda');?>
            </div>
            <div id="agenda" class="tab-pane">
                <?php $this->load->view('component/formagenda');?>
            </div>
        </div>
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
            var oi = "<tr id=\"rowrd" + count + "\"><td>" + count + "</td><td>" + $('#tnamard').val() + "</td><td>" + $('#tjamrd').val() + "</td><td>" + $('#ttempatrd').val() + "</td><td>" + $('#tpicrd').val() + "</td><td>" + $('#tketrd').val() + "</td><td><button type=\"button\" title=\"Klik Untuk Hapus Rundown Ini\" onclick=\"minus2('rowrd" + count + "','rowsubmit"+count+"')\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"btn btn-sm btn-round btn-danger\"><i class=\"fa fa-minus\"></i></button></td></tr>";
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