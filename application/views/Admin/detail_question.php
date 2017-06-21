<?php
    $elementParPage = '10';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Question | Liste</title>
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
                <li>FAQ</li>
                <li>Question</li>
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
                            <form class="form-horizontal" method="POST" action="<?php echo lienPage_controlleur('C_Question','lister') ?>">
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
                                <h3 class="box-title">Liste des questions</h3>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" style="float: right;" class="btn btn-info col-md-3" data-toggle="modal" data-target="#ajouterQuestion">Ajouter &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?php if(sizeof($listeQuestion)==0){ ?>
                                <center><h3>Aucun élément à afficher.</h3><br><br></center>
                            <?php }else{?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Commentaire</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($listeQuestion as $liste){
                                        $commentaire ='<i>Aucun commentaire</i>';
                                        if($liste->COMMENTAIRE!=''){
                                            $commentaire ='<i>'.$liste->COMMENTAIRE.'</i>';
                                        }
                                ?>
                                    <tr>
                                        <td><a href="<?php echo lienPage_controlleur('C_Question','detail?id='.$liste->IDQUESTION); ?>"><?php echo $liste->IDQUESTION?></a></td>
                                        <td><a href="<?php echo lienPage_controlleur('C_Question','detail?id='.$liste->IDQUESTION); ?>"><?php echo $liste->CONTENU?></a></td>
                                        <td><?php echo $commentaire?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                                <?php if($nbrPage!=1){ ?>
                                <ul class="pagination" style="float:right;">
                                    <?php for($i=0;$i<$nbrPage;$i++){?>
                                        <li><a href="<?php echo lienPage_controlleur('C_Question','lister')?>/<?php echo $elementParPage*$i; ?>/<?php echo $champ?>/<?php echo $ordre;?>"><?php echo $i+1;?></a></li>
                                    <?php } ?>
                                </ul>
                                <?php }?>
                            <?php }?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal pour ajouter une nouvelle question-->
    <div id="ajouterQuestion" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" method="POST" action="<?php echo lienPage_controlleur('C_Question','insert_action') ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajouter une nouvelle question</h4>
                </div>
                <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="contenu" class="col-sm-2 control-label">Question *</label>
                                <div class="col-sm-10">
                                    <textarea col="6" class="form-control" name="contenu" id="contenu" placeholder="Question" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="commentaire" class="col-sm-2 control-label">Commentaire</label>
                                <div class="col-sm-10">
                                    <textarea col="6" class="form-control" name="commentaire" id="commentaire" placeholder="Commentaire"></textarea>
                                </div>
                            </div>
                            <p>(*) Champ obligatoire</p>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="close" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-info pull-right">Ajouter</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <?php $this->load->view("/Admin/include/footer");?>
    <div class="control-sidebar-bg"></div>

</div>
<?php $this->load->view("/Admin/include/script");?>
</body>

</html>