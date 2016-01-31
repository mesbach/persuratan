<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                User Management
            </header>
            <div class="panel-body">
                <div class="col-lg-7">
                    <table class="table  table-hover general-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Hak Akses</th>
                                <th>Tanggal Dibuat</th>
                                <th>Status Aktif</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($akun as $v) {
                                $jam = date("d M Y", strtotime($v->tanggal_buat));
                                $wkt = date("H:i", strtotime($v->tanggal_buat));
                                $tr = 
                                 '<tr>
                                        <td>' . $v->nama . '</td>
                                        <td>' . $v->akses . '</td>
                                        <td>' . $jam . ' - ' . $wkt . ' WIB</td>
                                        ';
                                if ($v->aktif == 1) {
                                    $tr .= '<td>
                                        <select class="form-control input-sm m-bot15" onchange="changeactive(' . $v->idadmin . ',this.selectedIndex)">
                                            <option selected> Aktif</option>
                                            <option> Tidak Aktif</option>
                                        </select>
                                        </td>
                                    </tr>';
                                } else {
                                    $tr .= '<td>
                                        <select class="form-control input-sm m-bot15" onchange="changeactive(' . $v->idadmin . ',this.selectedIndex)">
                                            <option> Aktif</option>
                                            <option selected> Tidak Aktif</option>
                                        </select>
                                        </td>
                                    </tr>';
                                }
                                echo $tr;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-5">
                    <form action="<?php echo base_url(); ?>setting/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/adduser/" method="post">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Nama</label>
                                <input required type="text" class="form-control" name="nama" placeholder="Nama Akun" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Telepon</label>
                                <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Username</label>
                                <input required type="text" class="form-control" name="username"  value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Password </label>
                                <input type="password" required class="form-control" name="pwd" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label >Akses </label>
                                <select class="form-control m-bot15" name="kode">
                                    <?php foreach ($akses as $v) {
                                        echo '<option value="'.$v->id.'">'.$v->akses.'</option>';
                                                                    
                                                                } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary center-block" value="Tambah User">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    function changeactive(idadmin, cb)
    {
        var aktif;
        var kapsul = {};
        kapsul.value = {};
        kapsul.value.idadmin = idadmin;
        kapsul.value.aktif = cb;
        $.ajax({// create an AJAX call...
            data: kapsul, // get the form data
            type: "POST", // GET or POST
            url: "<?php echo site_url(); ?>setting/coord/changeactive/", // the file to call
            success: function (response) { // on success..
                alert('Data Berhasil Diubah');
            }
            ,error: function (xhr, ajaxOptions, thrownError) {
              alert(xhr.status);
              alert(thrownError);
              alert(xhr.responseText);
            }
        });
    }
</script>