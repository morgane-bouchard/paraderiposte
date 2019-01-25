<!DOCTYPE html>
<html>
<head>
	<title>Liste des Résultats</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>
    <table border="solid" align="center">
    <tr><th>Id</th><th>Date de Début</th><th>Date de fin</th><th>Intitulé</th><th>Lieu</th><th>Arme & Genre</th><th>Catégorie</th><th>Type</th><th>Date d'engagement</th><th>Actions</th></tr>
    <?php 
    foreach ($resultats as $resultat): ?>
    <tr style="text-align: center; ">
    	
        <td><?= $resultat->id ?></td>
    	<td><?= $resultat->datedeb ?></td>
        <td><?= $resultat->datefin ?></td>
    	<td><?= $resultat->nomCompet ?></td>
        <td><?= $resultat->lieu ?></td>
        <td><?= $resultat->arme ?></td>
        <td><?= $resultat->categorie ?></td>
        <td><?= $resultat->type ?></td>
        <td><?= $resultat->dateEngagement ?></td>
        <td>
        <?php if ($resultat->src != null) { ?>
        <a href = ".\pdf\<?= $resultat->src; ?>.pdf"><img src="..\webroot\img\page_pdf.png" width="32" height="32" /></a></td>
        <?php } ?>


    </tr>
    <?php endforeach; ?>

    </table>
</body>
</html>