<!DOCTYPE html>
<html>
<head>
	<title>Liste des Clubs</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>
	

    <table border="solid" align="center">
    <tr><th width="3%">Id</th><th>Nom</th><th>Adresse</th><th>Mail</th><th width="10%">Téléphone</th><th width="10%">Président</th><th width="10%">Secrétaire</th><th width="10%"s>Trésorier</th><th width="5%"></th></tr>
    <?php 
    foreach ($clubs as $club): 
    ?>
    <tr style="text-align: center; font-size: 0.8em;">
    	
    	<td><?= $club->id ?></td>
    	<td><?= $club->nom ?></td>
    	<td><?= $club->adresse ?></td>
    	<td><?= $club->mail ?></td>
        <td><?= $club->tel ?></td>
        <td><?= $club->president ?></td>
        <td><?= $club->secretaire ?></td>
        <td><?= $club->tresorier ?></td>

    	<td><a href="modif/<?= $club->id ?>"><center><img src="../webroot/img/logo_crayon.png" width="30px"></center></a></td>

    </tr>
    <?php endforeach; ?>

    </table>

</body>
</html>