<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <strong>Hasil Pencarian Tamu</strong>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li><strong>Ditemukan : </strong> <?php echo $jmldata ?> Tamu</li>
                            <li><strong>Tanggal : </strong> <?php echo $interval ?></li>
                            <li><strong>Kata Kunci : </strong> <?php echo $keyword ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                    <tr >
                                        
                                        <th>Nama</th>
                                        <th>Tanggal & Waktu</th>
                                        <th>Instansi</th>
                                        <th>Telepon</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result as $v) {
                                        $tgl = date("d M Y", strtotime($v->waktu));
                                        $wkt = date("H:i", strtotime($v->waktu));
                                        echo '<tr>
                                                <td ><a target="_blank" href="'.site_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/detailtamu/'.$v->id.'">'.$v->nama.'</a></td>
                                                <td ><a target="_blank" href="'.site_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/detailtamu/'.$v->id.'">'.$tgl.' Pukul '.$wkt.'</a></td>
                                                <td ><a target="_blank" href="'.site_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/detailtamu/'.$v->id.'">'.$v->asal.'</a></td>
                                                <td ><a target="_blank" href="'.site_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/detailtamu/'.$v->id.'">'.$v->telp.'</a></td>
                                                <td ><a target="_blank" href="'.site_url().'guest/'.$this->session->userdata['logged_in']['privilege'].'/detailtamu/'.$v->id.'">'.$v->keterangan.'</a></td>
                                            </tr>';
                                        
                                    } ?>
                                    
                                </tbody>
                                <tfoot>
                                    <tr >
                                        <th>Nama</th>
                                        <th>Tanggal & Waktu</th>
                                        <th>Instansi</th>
                                        <th>Telepon</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>

</div>
