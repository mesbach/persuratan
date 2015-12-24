
<!--Core js-->
<script src="<?php echo base_url(); ?>assets/ui/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/ui/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/ui/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/ui/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/ui/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/ui/js/jquery.nicescroll.js"></script>

<!-- untuk form add -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ui/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ui/js/ckeditor/ckeditor.js"></script>
<script >
    //date picker start

if (top.location != location) {
    top.location.href = document.location.href ;
}
$(function(){
    window.prettyPrint && prettyPrint();
    $('.default-date-picker').datepicker({
        format: 'dd-mm-yyyy'
    });
    
});

//date picker end
</script>

<!-- icheck -->
<script src="<?php echo base_url(); ?>assets/ui/js/iCheck/jquery.icheck.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/ui/js/scripts.js"></script>

<!--icheck init -->
<script src="<?php echo base_url(); ?>assets/ui/js/icheck-init.js"></script>

