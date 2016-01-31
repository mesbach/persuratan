<form action="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/updateDataProfile" method="post">
    <div class="row form-group">
        <div class="col-md-12">
            <label >Nama</label>
            <input required type="text" class="form-control" name="nama" placeholder="Nama Akun" value="<?php echo $this->session->userdata['logged_in']['nama']; ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label >Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $datadiri[0]->alamat; ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label >Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $datadiri[0]->telp; ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label >Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $datadiri[0]->email; ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" value="simpan">
        </div>
    </div>
</form>