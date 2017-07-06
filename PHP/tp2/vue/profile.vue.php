<?php     
    //-------------- importe le header ----------------------------//
    include('inc/header.inc.php');
?>

<div class="container">

    <div class="starter-template">
        <h1>Profil</h1>
    </div>

    <div class="row">
        <div class="col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad col-xs-12 col-md-6" >
    
            <div class="panel panel-info">
                <div class="panel-heading">
                <h3 class="panel-title"><?= $info_user->nom . ' ' . $info_user->prenom; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3" align="center">
                            <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                        </div>
                        
                        <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                        <dl>
                            <dt>DEPARTMENT:</dt>
                            <dd>Administrator</dd>
                            <dt>HIRE DATE</dt>
                            <dd>11/12/2013</dd>
                            <dt>DATE OF BIRTH</dt>
                            <dd>11/12/2013</dd>
                            <dt>GENDER</dt>
                            <dd>Male</dd>
                        </dl>
                        </div>-->
                        <div class=" col-md-9"> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>NOM:</td>
                                        <td><?= $info_user->nom; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Prenom :</td>
                                        <td><?= $info_user->prenom; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Télephone</td>
                                        <td><?= $info_user->telephone; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Profession</td>
                                        <td><?= $info_user->profession; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ville</td>
                                        <td><?= $info_user->ville; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Code Postale</td>
                                        <td><?= $info_user->codepostale; ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Adresse</td>
                                        <td><?= $info_user->adresse; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date de naissance</td>
                                        <td><?= $info_user->date_de_naissance; ?></td>
                                    </tr>
                                    <tr>
                                        <td>sexe</td>
                                        <td><?= $info_user->sexe; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><?= $info_user->description; ?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            
                        </div><!--/.col-md-9 -->
                    </div><!-- /.row -->
                </div><!-- /.panel-body  -->
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
                </div><!-- /.panel-footer-->
            </div><!-- /.panel-info -->
        </div>
    </div><!-- /.row-->


</div><!-- /.container -->

<?php
    include('inc/footer.inc.php');
