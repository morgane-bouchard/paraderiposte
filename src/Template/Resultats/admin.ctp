<!DOCTYPE html>
<html>
<head>
	<title>Liste des Résultats</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>
    <table border="solid" align="center">
    <tr><th>Id</th><th>Date de Début</th><th>Date de fin</th><th>Intitulé</th><th>Lieu</th><th>Arme & Genre</th><th>Catégorie</th><th>Type</th><th>Date d'engagement</th><th>Actions</th><th></th><th></th></tr>
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
        <td><?php if ($resultat->src != null) { ?>
        <a href = ".\pdf\<?= $resultat->src; ?>.pdf"><img src="..\webroot\img\page_pdf.png" width="32" height="32" /></a>
        <?php } ?></td>

        <td><a href="modif/<?= $resultat->id ?>"><center><img src="../webroot/img/logo_crayon.png" width="30px"></center></a></td>

    	<td><a href="delete/<?= $resultat->id ?>"><center><img src="../webroot/img/logo_poubelle.png" width="30px"></center></a></td>

    </tr>
    <?php endforeach; ?>

    </table>

    <button onclick="window.location.href='resadd'" class="all">Ajouter un évenement</button>

</body>
</html>