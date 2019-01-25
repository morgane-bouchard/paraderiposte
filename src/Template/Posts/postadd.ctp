<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un Post</title>
	<?= $this->Html->css('style2.css'); ?>
</head>
<body>
	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Posts/addsubmit">
			<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
			<label>Titre du post</label>
			<input type="text" name="titre" />
			<label>Texte du post</label>
			<textarea name="body" rows="4" cols="54" ></textarea> <br>
			<input type="submit" name="Ajouter ce post" style="width: 130px">
		</form>
	</div>
</body>
</html>