<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>Allo sakafo | Galérie</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <?php
    $this->load->helper('lien');
    $this->load->view('User/include/styleSheet-js');
    ?>
</head>

<body>
<?php
$this->load->view('User/include/header');
//$this->load->view('User/include/slide');
?>
<div class="banner padd">
    <div class="container">
        <!-- Image -->
        <img class="img-responsive" src="<?php echo assets_image_user('crown-white.png')?>" alt="" />
        <!-- Heading -->
        <h2 class="white">A propos</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo(lienPage('index'))?>">Accueil</a></li>
            <li class="active">A propos</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Inner Content -->
<div class="inner-page padd">

    <!-- About company -->


    <!-- Footer Start -->
    <?php $this->load->view('User/include/footer');?>
    <!-- Footer End -->

</div><!-- / Wrapper End -->


<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>
<?php $this->load->view('User/include/script');?>
</body>
</html>