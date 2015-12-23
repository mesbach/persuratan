<?php $fungsi = $this->uri->segment(3, 0); ?>
<!--logo start-->
<?php 
$this->load->model('dashboard/model');
$notif_surat = $this->model->getNofication();
$draft_surat  = $this->model->getDraft();
?>
<section class="panel">
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked mail-nav">
            <li class="<?php echo ($fungsi == 'inbox') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/coord/inbox"> <i class="fa fa-inbox"></i> Surat Masuk  <span class="label label-danger pull-right inbox-notification"><?php echo count($notif_surat)?></span></a></li>
            <li class="<?php echo ($fungsi == 'outbox') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/coord/outbox"> <i class="fa fa-envelope-o"></i> Surat Keluar</a></li>
            <li class="<?php echo ($fungsi == 'draft') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/coord/draft"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification"><?php echo count($draft_surat)?></span></a></li>
            <!--<li class="<?php //echo ($fungsi == 'trash') ? 'active' : ''; ?>"><a href="#"> <i class="fa fa-trash-o"></i> Kotak Sampah</a></li>-->
            <li class="<?php echo ($fungsi == 'search') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/coord/search"> <i class="fa fa-search"></i> Pencarian Arsip</a></li>
        </ul>
    </div>
</section>