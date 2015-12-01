<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Persuratan_Beta">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ui/images/email_black.png">
    <title><?php echo $template['title'];?></title>
    <?php echo $template['partials']['script_header']; ?>
    <?php echo $template['partials']['script_header_spesific']; ?>
    
</head>

<body>
    <section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <?php echo $template['partials']['header']; ?>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
    <aside>
        <?php echo $template['partials']['left_sidebar']; ?>
    </aside>
    <!--sidebar end-->
    
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <?php  echo $template['body']; ?>
        </section>
    </section>
    <!--main content end-->
    </section>
    <?php echo $template['partials']['script_footer']; ?>
    <?php echo $template['partials']['script_footer_spesific']; ?>

</body>

</html>