<!DOCTYPE html>
<html>
<head>
	<title>Ajouter une Compétition</title>
	<?= $this->Html->css('style2.css'); ?>
</head>
<body>
	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Resultats/addsubmit">
			<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
			
			<label>Date de début</label>
			<input type="text" name="datedeb" />
			<label>Date de fin</label>
			<input type="text" name="datefin" />
			<label>Intitulé</label>
			<input type="text" name="nom" />
			<label>Lieu</label>
			<input type="text" name="categorie" />
			<label>Arme & Genre</label>
			<input type="text" name="arme" />
			<label>Catégorie</label>
			<input type="text" name="categorie" />
			<label>Type</label>
			<input type="text" name="type" />
			<label>Date d'engagement</label>
			<input type="tel" name="dateEngagement" />
			<label>Src</label>
			<input type="tel" name="src" />

			<input type="submit" name="Ajouter cette compétition" style="width: 130px">
		</form>
	</div>
</body>
</html>