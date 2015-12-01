<section class="panel">
    <header class="panel-heading">
        Detil Tamu
        <div class="btn-group pull-right" >
            <button data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle" type="button">Pilihan <span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu">
                <li><a href="#" ><i class="fa fa-check"></i> Selesai</a></li>
                <li><a href="#" ><i class="fa fa-minus-circle"></i> Batal</a></li>
                <li><a href="#" ><i class="fa fa-check-circle"></i> Setujui</a></li>
                <li><a href="#" ><i class="fa fa-ban"></i> Tolak</a></li>
                <li class="divider"></li>
                <li><a href="#modalFormTamu" data-toggle="modal"><i class="fa fa-edit"></i> Ubah</a></li>
            </ul>
        </div>
    </header>
    <div class="panel-body">
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <h3 class="text-primary">Status : Pending</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Nama</label>
                        <p>
                            Nama Tamu / Rombongan
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Telepon</label>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Instansi</label>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label >Keterangan</label>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Foto</label>
                        <div class=" images documents item " >
                            <img src="<?php echo base_url(); ?>assets/ui/images/404.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" >
                    <div class="form-group">
                        <label >Disposisi</label>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12" >
                    <div class="form-group">
                        <label >Hasil Pertemuan</label>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="modalFormTamu" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Form Tamu</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('component/formtamu'); ?>
            </div>
        </div>
    </div>
</div>