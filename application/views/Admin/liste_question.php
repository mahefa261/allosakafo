<?php
    $elementParPage = '10';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produit | Liste</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
    $this->load->view("/Admin/include/styleSheet");
    ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view("/Admin/include/header");?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view("/Admin/include/menu");?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Allo Sakafo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo lienPage_controlleur('Administrateur','index')?>"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li>Produits</li>
                <li class="active">Liste</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="box">
                        <div class="box-header row">
                            <div class="col-xs-12">
                                <h3 class="box-title">Filtrer</h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <form class="form-horizontal" method="POST" action="<?php echo lienPage_controlleur('C_Produit','lister') ?>">
                                        <div class="col-xs-1"></div>
                                    <div class="col-xs-10">
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
                                    </div>
                                    <div class="col-xs-1"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="box">
                        <div class="box-header row">
                            <div class="col-xs-6">
                                <h3 class="box-title">Liste des produits</h3>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo lienPage_controlleur('C_Produit','insert')?>" style="float: right;" class="btn btn-info col-md-3" >Ajouter &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?php if(sizeof($listeProduit)==0){ ?>
                                <center><h3>Aucun élément à afficher.</h3><br><br></center>
                            <?php }else{?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Catégorie</th>
                                    <th>Prix</th>
                                    <th>Ajouté le</th>
                                    <th>Afficher</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listeProduit as $liste){
                                    $aafficher = '<strong>Non</strong>';
                                    if($liste->AAFFICHER==1){
                                        $aafficher = 'Oui';
                                    }
                                ?>
                                    <tr>
                                        <td><a href="<?php echo lienPage_controlleur('C_Produit','detail?id='.$liste->IDPRODUIT); ?>"><?php echo $liste->IDPRODUIT?></a></td>
                                        <td><a href="<?php echo lienPage_controlleur('C_Produit','detail?id='.$liste->IDPRODUIT); ?>"><?php echo $liste->NOMPRODUIT?></a></td>
                                        <td><?php echo $liste->NOMCATEGORIE?></td>
                                        <td><?php echo $liste->PRIXUNITAIRE?></td>
                                        <td><?php echo $liste->DATEEFFECTIVITE?></td>
                                        <td><?php echo $aafficher?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                                <ul class="pagination" style="float:right;">
                                    <?php for($i=0;$i<$nbrPage;$i++){?>
                                        <li><a href="<?php echo lienPage_controlleur('C_Produit','lister')?>/<?php echo $elementParPage*$i; ?>/<?php echo $champ?>/<?php echo $ordre;?>"><?php echo $i+1;?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php }?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view("/Admin/include/footer");?>
    <div class="control-sidebar-bg"></div>

</div>
<?php $this->load->view("/Admin/include/script");?>
</body>

</html>