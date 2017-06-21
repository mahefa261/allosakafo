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
    <div class="about-company padd">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- About Compnay Item -->
                    <div class="about-company-item">
                        <!-- Heading -->
                        <h3>A propos d'<span class="lblue">Allo Sakafo</span></h3>
                        <!-- Paragraph -->
                        <p>
                            Allo Sakafo est une société agro-alimentaire qui s'est récemment installée à Antananarivo en novembre 2016.<br> Nous employons une trentaine de collaborateurs dont des Chefs Cuisiniers expérimentés, des Commis de Cuisine ainsi que des livreurs et du personnel administratif.<br/>
                            Tout le monde a droit à un bon break et un bon plat, sans les contraintes de faire les courses et les longues préparations en cuisine.
                            <br>C'est dans cette optique que nous avons monté notre service Sakafo à votre porte et à domicile.
                        </p>
                        <br /><!--/ Line break -->

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- About Compnay Item -->
                    <div class="about-company-item">
                        <!-- About Company Image -->
                        <img class="img-responsive img-thumbnail" src="<?php echo assets_image_user('chef/about-2.jpg')?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- About Compnay Item -->
                    <div class="about-company-item">
                        <!-- About Company Image -->
                        <img class="img-responsive img-thumbnail" src="<?php echo assets_image_user('chef/about-3.jpg')?>" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-company-item">
                        <p>
                            Nous vous facilitons la tâche : <strong>vous appelez et commandez et on vous livre à l'heure qui vous convient.</strong><br>
                            Allo Sakafo est un service simple : après un appel, vous aurez un repas délicieux à prix abordable, sans vous déplacer et sans les stress en ville.
                            <br><br>Les repas sont préparés et élaborés avec des produits frais du jour et nous les livrons chauds chez vous.
                            <br><strong>A partir de 1 000 Ar</strong>, vous aurez vos Sakafo, délicieux, à moindre coût, chez vous et pour toute la famille ... et faîtes le calcul, avec 1 000 Ar, vous n'aurez même pas un demi litre d'essence pour amener toute la famille au resto !
                        </p>
                        <br /><!--/ Line break -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php $this->load->view('User/include/footer');?>
    <!-- Footer End -->

</div><!-- / Wrapper End -->


<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>
<?php $this->load->view('User/include/script');?>
</body>
</html>