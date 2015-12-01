<?php $fungsi = $this->uri->segment(3, 0); ?>
<section class="panel">
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked mail-nav">
            <li class="<?php echo ($fungsi == 'inbox') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/operator/inbox"> <i class="fa fa-inbox"></i> Surat Masuk  <span class="label label-danger pull-right inbox-notification">9</span></a></li>
            <li class="<?php echo ($fungsi == 'outbox') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/operator/outbox"> <i class="fa fa-envelope-o"></i> Surat Keluar</a></li>
            <li class="<?php echo ($fungsi == 'draft') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/operator/draft"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">123</span></a></li>
            <li class="<?php echo ($fungsi == 'search') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>mail/operator/search""> <i class="fa fa-search"></i> Pencarian Arsip</a></li>
        </ul>
    </div>
</section>