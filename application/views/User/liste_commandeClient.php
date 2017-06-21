<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>Allo sakafo | Commande</title>
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
<div class="header">
    <div class="container">
        <?php
        $this->load->view('User/include/panier');
        $this->load->view('User/include/menu');
        ?>
    </div>
</div>
<div class="banner padd">
    <div class="container">
        <!-- Image -->
        <img class="img-responsive" src="<?php echo assets_image_user('crown-white.png')?>" alt="" />
        <!-- Heading -->
        <h2 class="white">Mes commandes</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo(lienPage('index'))?>">Accueil</a></li>
            <li class="active">Liste des commandes</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Inner Content -->
<div class="inner-page padd">
    <!-- Shopping Start -->

    <div class="shopping">
        <div class="container">
            <!-- Shopping items content -->
            <div class="shopping-content">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <?php if($nbrElement!=0){ ?>
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Date de commande</th>
                                    <th>Date de livraison</th>
                                    <th>Lieu de livraison</th>
                                    <th>Etat</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($commandeMere as $liste){
                                        $datestring = '%d-%m-%Y %h:%i';
                                        $dateCommande = new DateTime($liste->DATECOMMANDE);
                                        $dateLivraison = new DateTime($liste->DATELIVRAISON);
                                        $adresseLivraison = $liste->ADRESSE.' '.$liste->NOMQUARTIER.' ('.$liste->NOMTYPEADRESSE.')';

                                ?>
                                    <tr>
                                        <td><a href="<?php echo lienPage_controlleur('C_CommandeFille','u_commande_fille?cmd='.$liste->IDCOMMANDEMERE) ?>">CMD-<?php echo $liste->IDCOMMANDEMERE;?></a></td>
                                        <td><?php echo $dateCommande->format('d-m-Y H:i')?></td>
                                        <td><?php echo $dateLivraison->format('d-m-Y H:i')?></td>
                                        <td><?php echo $adresseLivraison?></td>
                                        <td><?php echo $liste->ETATCOMMANDE;?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else {?>
                        <center><h3>Aucun élément à afficher</h3></center><br/>
                    <?php } ?>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <?php $this->load->view('User/include/footer');?>
</div>
<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>
<?php $this->load->view('User/include/script');?>
</body>
</html>