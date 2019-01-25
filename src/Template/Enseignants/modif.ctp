<!DOCTYPE html>
<html>
<head>
	<title>Modifier un Enseignant</title>
	<?= $this->Html->css('style2.css'); ?>
</head>
<body>
	<h2 style="text-align: center;"><?= $enseignant->nom; ?></h2>
	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Enseignants/modifsubmit/<?= $enseignant->id; ?>">
			<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">

			<input style="display: none;" type="text" name="id" value="<?= $enseignant->id; ?>">


			<label>Téléphone de l'enseignant</label>
			<input type="tel" name="tel" value="<?= $enseignant->tel; ?>">

			<label>Mail de l'enseignant</label>
			<input type="mail" name="mail" value="<?= $enseignant->mail; ?>">

			<input type="submit" name="Ajouter ce post" style="width: 130px">
		</form>
	</div>
</body>
</html>