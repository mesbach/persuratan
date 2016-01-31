<form action="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata['logged_in']['privilege'] ?>/updatelogin" method="post">
    <div class="row form-group">
        <div class="col-md-12">
            <label >Username</label>
            <input required type="text" class="form-control" name="username"  value="<?php echo $datadiri[0]->username; ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label >Password Baru</label>
            <input type="password" required class="form-control" name="pwd" value="">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit" class="btn btn-danger" value="simpan">
        </div>
    </div>
</form>