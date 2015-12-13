<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <strong>Hasil Pencarian Agenda</strong>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li><strong>Ditemukan : </strong> <?php echo $jmldata ?> Agenda</li>
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
                                        <th>Tanggal</th>
                                        <th>Tempat</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result as $v) {
                                        $dari = date("d M Y", strtotime($v->awal));
                                        $hingga = date("d M Y", strtotime($v->akhir));
                                        echo '<tr >
                                                <td ><a href="#">'.$v->judul.'</a></td>
                                                <td ><a href="#">'.$dari.' - '.$hingga.'</a></td>
                                                <td ><a href="#">'.$v->tempat.'</a></td>
                                                <td ><a href="#">'.$v->isi.'</a></td>
                                            </tr>';
                                        
                                    } ?>
                                    
                                </tbody>
                                <tfoot>
                                    <tr >
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Tempat</th>
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
