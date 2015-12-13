<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <strong>Hasil Pencarian Surat</strong>
            </header>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-4">
                        <ul>
                            <li><strong>Ditemukan : </strong><?php echo $jmldata ?> Surat</li>
                            <li><strong>Tanggal Surat : </strong><?php echo $interval ?></li>
                            <li><strong>Sifat : </strong> <?php echo $sifat ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <ul>
                            <li><strong>Jenis : </strong> <?php if($jenis == 'in') echo 'Surat Masuk'; else echo 'Surat Keluar'; ?></li>
                            <li><strong>Kategori : </strong> <?php echo $kategori ?></li>
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
                                        <th><?php if($jenis == 'in') echo 'Dari'; else echo 'Ke'; ?></th>
                                        <th>Tanggal Surat</th>
                                        <th>Tanggal Terima</th>
                                        <th>Judul</th>
                                        <th>Perihal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($jenis == 'in') 
                                        {
                                        
                                            foreach ($result as $v) {
                                                $newTS = date("d M Y", strtotime($v->tanggal_surat));
                                                $newTT = date("d M Y", strtotime($v->tanggal_terima));
                                                echo '<tr >
                                                        
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$v->pengirim.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$newTS.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$newTT.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$v->judul.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$v->perihal.'</a></td>
                                                    </tr>';

                                             }
                                        } 
                                        else 
                                        { 
                                            
                                            foreach ($result as $v) {
                                                $newTS = date("d-m-Y", strtotime($v->tanggal_surat));
                                                $newTT = date("d-m-Y", strtotime($v->tanggal_terima));
                                                echo '<tr >
                                                        
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$v->penerima.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$newTS.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$newTT.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$v->judul.'</a></td>
                                                        <td ><a target="_blank" href="'.base_url().'mail/coord/viewMail/'.$v->id.'">'.$v->perihal.'</a></td>
                                                    </tr>';

                                             }
                                        }
                                     ?>
                                </tbody>
                                <tfoot>
                                    <tr >
                                        
                                        <th><?php if($jenis == 'in') echo 'Dari'; else echo 'Ke'; ?></th>
                                        <th>Tanggal Surat</th>
                                        <th>Tanggal Terima</th>
                                        <th>Judul</th>
                                        <th>Perihal</th>
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
