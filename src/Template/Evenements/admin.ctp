<!DOCTYPE html>
<html>
<head>
	<title>Liste des Evenements</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>
    <table border="solid" align="center">
    <tr><th>Date de Début</th><th>Date de fin</th><th>Titre</th><th>Description</th><th>Suppression</th></tr>
    <?php 
    foreach ($evenements as $evenement): ?>
    <tr style="text-align: center; ">
    	
    	<td><?= $evenement->datedebut ?></td>
        <td><?= $evenement->datefin ?></td>
    	<td><?= $evenement->titre ?></td>
    	<td style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" ><?= $evenement->description ?></td>

    	<td><a href="delete/<?= $evenement->id ?>"><center><img src="../webroot/img/logo_poubelle.png" width="30px"></center></a></td>

    </tr>
    <?php endforeach; ?>

    </table>

    <button onclick="window.location.href='evenadd'" class="all">Ajouter un évenement</button>

</body>
</html>