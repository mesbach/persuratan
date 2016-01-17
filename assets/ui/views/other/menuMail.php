<?php $fungsi = $this->uri->segment(3, 0); ?>
<!--logo start-->
<?php 
$this->load->model('dashboard/model');
$notif_surat = $this->model->getUnreadmail();
$draft_surat  = $this->model->getDraft();
?>
<section class="panel">
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked mail-nav">
            <li class="<?php echo ($fungsi == 'inbox') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/inbox"> <i class="fa fa-inbox"></i> Surat Masuk  <span class="label label-danger pull-right inbox-notification"><?php $injml=0; foreach($notif_surat as $v){ if($v->jenis_surat == 'in'){ $injml+=1; };}; if($injml>0){echo $injml;}?></span></a></li>
            <li class="<?php echo ($fungsi == 'outbox') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/outbox"> <i class="fa fa-envelope-o"></i> Surat Keluar <span class="label label-danger pull-right inbox-notification"><?php $outjml=0; foreach($notif_surat as $v){ if($v->jenis_surat == 'out'){ $outjml+=1; }; } ; if($outjml>0){echo $outjml;}?></span></a></li>
            <li class="<?php echo ($fungsi == 'draft') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/<?php echo $this->session->userdata["logged_in"]["privilege"] ?>/draft"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification"><?php $draftjml=0; foreach($notif_surat as $v){ if($v->isdraft == 1){ $draftjml+=1; }; }; if($draftjml>0) {echo $draftjml;}?></span></a></li>
            <!--<li class="<?php //echo ($fungsi == 'trash') ? 'active' : ''; ?>"><a href="#"> <i class="fa fa-trash-o"></i> Kotak Sampah</a></li>-->
        </ul>
    </div>
</section>