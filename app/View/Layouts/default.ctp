<!DOCTYPE html>
<html>
<head>
    <title>Tin Tức Việt</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo $this->fetch('meta'); ?>
    <?php echo $this->Html->css(array('bootstrap.min.css', 'font-awesome.min.css','animate.css',
        'font.css','li-scroller.css','slick.css','jquery.fancybox.css','theme.css','style.css' )) ?>
    <!--[if lt IE 9]>

    <?php echo $this->Html->script(array('html5shiv.min.js','respond.min.js')) ?>
    <!--[endif]-->
    <?php echo $this->fetch('css'); ?>

</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

    <?php echo $this->element('header') ?>

    <?php echo $this->element('nav') ?>

    <div id="content">
        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>

    <?php echo $this->element('footer') ?>

</div>

<?php echo $this->Html->script(array('jquery.min.js','wow.min.js','bootstrap.min.js','slick.min.js',
'jquery.li-scroller.1.0.js',
'jquery.newsTicker.min.js','jquery.fancybox.pack.js','custom.js')) ?>


<?php echo $this->fetch('script'); ?>

</body>
</html>