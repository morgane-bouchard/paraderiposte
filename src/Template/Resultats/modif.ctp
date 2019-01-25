<!DOCTYPE html>
<html>
<head>
	<title>Modifier une Compétition</title>
	<?= $this->Html->css('style2.css'); ?>
</head>
<body>
	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Resultats/addsubmit">
			<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
			
			<label>Date de début</label>
			<input type="text" name="datedeb" value="<?= $resultat->datedeb; ?>" />
			<label>Date de fin</label>
			<input type="text" name="datefin" value="<?= $resultat->datefin; ?>" />
			<label>Intitulé</label>
			<input type="text" name="nomCompet" value="<?= $resultat->nomCompet; ?>" />
			<label>Lieu</label>
			<input type="text" name="lieu" value="<?= $resultat->lieu; ?>" />
			<label>Arme & Genre</label>
			<input type="text" name="arme" value="<?= $resultat->arme; ?>" />
			<label>Catégorie</label>
			<input type="text" name="categorie" value="<?= $resultat->categorie; ?>" />
			<label>Type</label>
			<input type="text" name="type" value="<?= $resultat->type; ?>" />
			<label>Date d'engagement</label>
			<input type="text" name="dateEngagement" value="<?= $resultat->dateEngagement; ?>" />
			<label>Src</label>
			<input type="text" name="src" value="<?= $resultat->src; ?>" />

			<input type="submit" name="Ajouter ce post" style="width: 130px">
		</form>
	</div>
</body>
</html>