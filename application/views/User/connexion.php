<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>Allo sakafo | Connexion</title>
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
        <h2 class="white">Connectez-vous</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo(lienPage('index'))?>">Accueil</a></li>
            <li class="active">Connexion</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Banner End -->
<!-- Inner Content -->
<div class="inner-page padd">

    <!-- Contact Us Start -->

    <div class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Contact Us content -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- Contact content details -->
                            <div class="contact-details">
                                <!-- Heading -->
                                <h4>Adresse</h4><!-- Address / Icon -->
                                <i class="fa fa-map-marker br-red"></i> <span>Andoharanofotsy<br />102, Antananarivo,<br /> Madagascar</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- Contact content details -->
                            <div class="contact-details">
                                <!-- Heading -->
                                <h4>Coordonnées</h4>
                                <!-- Contact Number / Icon -->
                                <i class="fa fa-phone br-green"></i> <span>0 32 07 300 30<br/>0 33 33 300 30<br/>0 34 11 300 30</span>
                                <div class="clearfix"></div>
                                <!-- Email / Icon -->
                                <i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">allosakafo@gmail.com</a></span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!--/ Inner row end -->
                    <!-- Contact form -->
                    <div class="contact-form">
                        <!-- Heading -->
                        <h3>Envoyez-nous un message</h3>
                        <!-- Form -->
                        <form role="form" action="<?php echo lienPage_controlleur('C_Message','util_envoyer')?>" method="POST">
                            <div class="form-group">
                                <!-- Form input -->
                                <input class="form-control" name="nom" id="nom" type="text" required placeholder="Nom" />
                            </div>
                            <div class="form-group">
                                <!-- Form input -->
                                <input class="form-control" name="email" id="email" type="email" required placeholder="Adresse électronique" />
                            </div>
                            <div class="form-group">
                                <!-- Form input -->
                                <select name="idTypeMessage" id="idTypeMessage" class="form-control" required>
                                    <option value="">- Choisir le type de message -</option>
                                    <?php foreach($listeTypeMessage as $typeMessage){?>
                                        <option value="<?php echo $typeMessage->IDTYPEMESSAGE?>"><?php echo $typeMessage->NOMTYPEMESSAGE?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- Form text area -->
                                <textarea class="form-control" rows="3" name="contenu" id="contenu" required placeholder="Message..."></textarea>
                            </div>
                            <!-- Form button -->
                            <button class="btn btn-danger btn-sm" type="submit">Envoyer</button>&nbsp;
                            <button class="btn btn-default btn-sm" type="reset">Réinitialiser</button>
                        </form>
                    </div><!--/ Contact form end -->
                </div>
                <div class="col-md-6">
                    <!-- Map holder -->
                    <div class="map-container">
                        <!-- Google Map -->
                        <iframe	src="https://maps.google.co.in/?ie=UTF8&amp;ll=-18.986005,47.532738&amp;spn=-18.986009,47.532729ifram&amp;t=m&amp;z=10&amp;output=embed"></iframe>
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