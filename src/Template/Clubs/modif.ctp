<!DOCTYPE html>
<html>
<head>
	<title>Modifier un Club</title>
	<?= $this->Html->css('style2.css'); ?>
</head>
<body>
	<h2 style="text-align: center;"><?= $club->nom; ?></h2>
	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Clubs/modifsubmit/<?= $club->id; ?>">
			<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
			<label>Adresse du club</label>
			<input type="text" name="adresse" value="<?= $club->adresse; ?>" />
			<label>Mail du club</label>
			<input type="mail" name="mail" value="<?= $club->mail; ?>" /><br>
			<label>Téléphone du club</label>
			<input type="tel" name="tel" value="<?= $club->tel; ?>" />
			<label>Président du club</label>
			<input type="text" name="president" value="<?= $club->president; ?>" />
			<label>Secrétaire du club</label>
			<input type="text" name="secretaire" value="<?= $club->secretaire; ?>" />
			<label>Trésorier du club</label>
			<input type="text" name="tresorier" value="<?= $club->tresorier; ?>" />
			<input type="submit" name="Ajouter ce post" style="width: 130px">
		</form>
	</div>
</body>
</html>