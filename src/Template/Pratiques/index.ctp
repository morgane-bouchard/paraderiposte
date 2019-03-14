<!-- File: src/Template/Posts/index.ctp -->
<!DOCTYPE html>
<html>
<head>
    <title>Pratiques</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>

    <div class="container-fluid" style="border:solid; border-color: #424558; background-color:white;margin: 1%; padding: 0.1%;margin-left: 15%;margin-right: 15%" >

        <h3 style="color: black"><b>Pratiques</b></h3>
        <p>
            Ici vous allez pouvoir trouver toutes les informations pour vous inscrire: les horaires, les tarifs.
            <br>
            Vous pourrez aussi télécharger le formulaire d’inscription et les modèles de certificats médicaux.
            <br>
            
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="http://localhost/paraderiposte/Pratiques/inscription" class="btn btn-sm animated-button victoria-one">Inscriptions</a> </div>
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button victoria-one">Horaires</a> </div>
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button victoria-one">Tarifs</a> </div>
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button victoria-one">Conditions générales d’inscription</a> </div>
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button victoria-one">Attestation d’assurance</a> </div>
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button victoria-one">Parrainage</a> </div>
        </p>

    </div>
</body>
</html>