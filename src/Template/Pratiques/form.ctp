<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<?= $this->Html->css('style2.css'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div id="container">
            <!-- zone de connexion -->          
            <form action="http://localhost/paraderiposte/Pratiques/#" method="POST">
            <div class="section"><span>1</span>Informations sur le tireur</div>
            <div class="inner-wrap">                
                <input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer le nom" name="nom" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrer le prénom" name="prenom" required>

                </div>


                <label><b>Date de naissance</b></label>
                <input type="text" placeholder="Entrer la date de naissance" name="dateN" required>

                <label><b>Adresse</b></label>
                <input type="text" placeholder="Entrer le numéro de rue et la rue" name="adresse" required>

                <label><b>Code postal</b></label>
                <input type="text" placeholder="Entrer le code postal" name="codeP" required>

                <label><b>Ville</b></label>
                <input type="text" placeholder="Entrer la ville" name="ville" required>

                <label><b>Téléphone fixe</b></label>
                <input type="text" placeholder="Entrer le téléphone fixe" name="telFixe" required>

                <label><b>Téléphone portable</b></label>
                <input type="text" placeholder="Entrer le téléphone portable" name="telPortable" required>

                <label><b>Adresse mail</b></label>
                <input type="mail" placeholder="Entrer l'adresse mail" name="mail" required>

                <br>

                <div>
                <input type="checkbox" id="gaucher" name="mains">
				<label for="gaucher">Gaucher</label>

				<input type="checkbox" id="droitier" name="mains">
				<label for="droitier">Droitier</label>
				</div>

				<div>
					<label><b>Souhaite recevoir une attestation pour son comité entreprise ?</b></label>
					<input type="checkbox" id="oui" name="attestation"><label for="attestation"> Oui</label>
				</div>


                <input type="submit" id='submit' value='Suivant' >
            </form>
        </div>
</body>
</html>