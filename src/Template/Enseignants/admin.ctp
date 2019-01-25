<!DOCTYPE html>
<html>
<head>
	<title>Liste des Enseignants</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>
	

    <table border="solid" align="center">
    <tr><th width="3%">Id</th><th>Nom</th><th width="10%">Téléphone</th><th>Mail</th><th>Carte Pro</th><th width="3%"></th></tr>
    <?php 
    foreach ($enseignants as $enseignant): 
    ?>
    <tr style="text-align: center; font-size: 0.8em;">
    	
    	<td><?= $enseignant->id ?></td>
    	<td><?= $enseignant->nom ?></td>
    	<td><?= $enseignant->tel ?></td>
    	<td><?= $enseignant->mail ?></td>
        <td><a href="<?= $enseignant->cartePro ?>">Carte Pro</a></td>

    	<td><a href="modif/<?= $enseignant->id ?>"><center><img src="../webroot/img/logo_crayon.png" width="30px"></center></a></td>

    </tr>
    <?php endforeach; ?>

    </table>

</body>
</html>