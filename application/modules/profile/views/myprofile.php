<div class="row">
    <div class="col-md-8">
        <section class="panel">
            <div class="panel-body profile-information">
                <div class="col-md-3">
                    <div class="profile-pic text-center">
                        <img src="<?php echo base_url(); ?>assets/ui/images/user.png" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-desk">
                        <h1><?php echo $this->session->userdata['logged_in']['nama']; ?></h1>
                        <span class="text-muted">Hak Akses : <?php echo $datadiri[0]->akses; ?></span>
                        <dl>
                            <dt>Email</dt>
                            <dd><?php echo $datadiri[0]->email; ?></dd>
                            <dt>Telepon</dt>
                            <dd><?php echo $datadiri[0]->telp; ?></dd>
                            <dt>Alamat</dt>
                            <dd><?php echo $datadiri[0]->alamat; ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row form-group"><a href="#modalProfile" data-toggle="modal" class="btn btn-warning">Ubah Profil</a></div>
                    <div class="row form-group"><a href="#modalLogin" data-toggle="modal" class="btn btn-danger">Ubah Login</a></div>
                </div>
            </div>
        </section>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalProfile" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Profile</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('formeditprofile') ?>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalLogin" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Login</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('formeditlogin') ?>
            </div>
        </div>
    </div>
</div>