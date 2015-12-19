
<script src="<?php echo base_url(); ?>assets/ui/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ui/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>

<!-- icheck -->
<script src="<?php echo base_url(); ?>assets/ui/js/iCheck/jquery.icheck.js"></script>
<!--icheck init -->
<script src="<?php echo base_url(); ?>assets/ui/js/icheck-init.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/ui/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ui/js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="<?php echo base_url(); ?>assets/ui/js/dynamic_table_init.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/ui/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>

<script>
    //datetime picker start

$(".form_datetime").datetimepicker({format: 'dd-mm-yyyy hh:ii'});

$(".form_datetime-component").datetimepicker({
    format: "dd MM yyyy - hh:ii"
});

$(".form_datetime-adv").datetimepicker({
    format: "dd MM yyyy - hh:ii",
    autoclose: true,
    todayBtn: true,
    startDate: "2013-02-14 10:00",
    minuteStep: 10
});

$(".form_datetime-meridian").datetimepicker({
    format: "dd MM yyyy - HH:ii P",
    showMeridian: true,
    autoclose: true,
    todayBtn: true
});

//datetime picker end
</script>