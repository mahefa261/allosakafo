<?php
    $elementParPage = '10';
    $nomCategorie ='';
    foreach($infoCategorie as $categorie){
        $nomCategorie = $categorie->NOMCATEGORIE;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>Allo sakafo | <?php echo $nomCategorie?></title>
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
        <h2 class="white"><?php echo $nomCategorie?></h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo(lienPage('index'))?>">Accueil</a></li>
            <li class="active"><?php echo $nomCategorie?></li>
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
                <div class="col-md-2">
                    <div class="col-md-0 col-xs-3"></div>
                    <div class="col-md-12 col-xs-6">
                        <form method="POST" action="<?php echo lienPage_controlleur('C_Produit','util_liste_par_categorie?cat='.$idCategorie) ?>" class="form-horizontal">
                            <div class="form-group">
                                <label for="identifiant" class="row control-label">Colonne</label>
                                <div class="">
                                    <select required class="row form-control" name="colonne" id="colonne">
                                        <option value="">-- Choisir --</option>
                                        <?php
                                        foreach($tableauColonne as $tbColonne){
                                            $selected='';
                                            if($tbColonne['VAL']==$champ) $selected='selected';
                                            ?>
                                            <option <?php echo $selected?> value="<?php echo $tbColonne['VAL']?>"><?php echo $tbColonne['NOM']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="identifiant" class="row control-label">Ordre</label>
                                <div class="">
                                    <select required class="row form-control" name="ordre" id="ordre">
                                        <option value="">-- Choisir --</option>
                                        <?php
                                        foreach($tableauOrdre as $tbOrdre){
                                            $selected='';
                                            if($tbOrdre['VAL']==$ordre) $selected='selected';
                                            ?>
                                            <option <?php echo $selected?> value="<?php echo $tbOrdre['VAL']?>"><?php echo $tbOrdre['NOM']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <input type="submit" class="btn btn-info" value="Valider">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-0 col-xs-3"></div>
                </div>
                <div class="col-md-10 col-xs-12">
                    <?php foreach($listeProduit as $produits){?>
                    <div class="col-md-4 col-sm-6">
                        <!-- Shopping items -->
                        <div class="shopping-item">
                            <!-- Image -->
                            <a href="<?php echo(lienPage_controlleur('C_Produit','util_detail?pdt='.$produits->IDPRODUIT))?>"><img class="img-responsive" src="<?php echo assets_image_user_dish($produits->LIENIMAGE);?>" alt="" /></a>
                            <!-- Shopping item name / Heading -->
                            <h4 class="pull-left"><a href="<?php echo(lienPage_controlleur('C_Produit','util_detail?pdt='.$produits->IDPRODUIT))?>"><?php echo $produits->NOMPRODUIT;?></a></h4>
                            <span class="item-price pull-right">Ar <?php echo number_format($produits->PRIXUNITAIRE, 0, ',', ' ');?></span>
                            <div class="clearfix"></div>
                            <!-- Buy now button -->
                            <div class="visible-xs">
                                <a class="btn btn-danger btn-sm" href="#">Acheter</a>
                            </div>
                            <!-- Shopping item hover block & link -->
                            <div class="item-hover br-red hidden-xs"></div>
                            <a class="link hidden-xs" href="#">Commander</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- Pagination -->
                <div class="shopping-pagination">
                    <ul class="pagination">
                        <?php if($nbrPage>1){for($i=0;$i<$nbrPage;$i++){?>
                            <li><a href="<?php echo lienPage_controlleur('C_Produit','lister')?>/<?php echo $elementParPage*$i; ?>/<?php echo $champ?>/<?php echo $ordre;?>"><?php echo $i+1;?></a></li>
                        <?php } }?>
                        <!--<li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>-->
                    </ul>
                </div>
                <!-- Pagination end-->
            </div>
        </div>
    </div>

    <!-- Shopping End -->

    <!-- Footer Start -->
    <?php $this->load->view('User/include/footer');?>
    <!-- Footer End -->

</div><!-- / Wrapper End -->


<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>
<?php $this->load->view('User/include/script');?>
</body>
</html>