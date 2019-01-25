<!DOCTYPE html>
<html>
<head>
	<title>Modifier un Licencié</title>
	<?= $this->Html->css('style2.css'); ?>
</head>
<body>
	<h2 style="text-align: center;"><?= $licencie->id; ?></h2>
	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Licencies/modifsubmit/<?= $licencie->id; ?>">
			<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">


			<input style="display: none;" type="text" name="id" value="<?= $licencie->id; ?>">

			<label>Club du Licencié</label><br>
			<select name="club" id="club">
			    <option value="SAINT GREGOIRE" <?php if($licencie->club == "SAINT GREGOIRE"){echo 'selected = "selected"';} ?> >St Grégoire</option>
			    <option value="BETTON" <?php if($licencie->club == "BETTON"){echo 'selected = "selected"';} ?>>Betton</option>
			    <option value="CHEVAIGNE" <?php if($licencie->club == "CHEVAIGNE"){echo 'selected = "selected"';} ?>>Chevaigné</option>
			</select>
			<br>

			<label>Nom du Licencié</label>
			<input type="text" name="nom" value="<?= $licencie->nom; ?>" /><br>

			<label>Prénom du Licencié</label>
			<input type="text" name="prenom" value="<?= $licencie->prenom; ?>" />
			<label>Date de naissance du Licencié</label>
			<input type="text" name="dateN" value="<?= $licencie->dateN; ?>" />
			<label>Age du Licencié</label>
			<input type="text" name="age" value="<?= $licencie->age; ?>" />
			<label>Catégorie du Licencié</label>
			<input type="text" name="categorie" value="<?= $licencie->categorie; ?>" />
			<label>Adresse du Licencié</label>
			<input type="text" name="adresse" value="<?= $licencie->adresse; ?>" />
			<label>Code Postal du Licencié</label>
			<input type="text" name="codeP" value="<?= $licencie->codeP; ?>" />
			<label>Ville du Licencié</label>
			<input type="text" name="ville" value="<?= $licencie->ville; ?>" />
			<label>Téléphone Fixe du Licencié</label>
			<input type="tel" name="telFixe" value="<?= $licencie->telFixe; ?>" />
			<label>Téléphone Portable du Licencié</label>
			<input type="tel" name="telPortable" value="<?= $licencie->telPortable; ?>" />
			<label>Mail du Licencié</label>
			<input type="mail" name="mail" value="<?= $licencie->mail; ?>" />
			<label>Cours1 du Licencié</label>
			<input type="text" name="cours1" value="<?= $licencie->cours1; ?>" />
			<label>Cours2 du Licencié</label>
			<input type="text" name="Cours2" value="<?= $licencie->Cours2; ?>" />
			<input type="submit" name="Ajouter ce post" style="width: 130px">
		</form>
	</div>
</body>
</html>