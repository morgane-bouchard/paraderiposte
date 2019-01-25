<!DOCTYPE html>
<html> 
	<head> 
		<title>Enseignants</title>
		<meta charset='utf-8'>
    	<?= $this->Html->css('style.css'); ?>

	</head>
	<body> 
		 <table border="solid" align="center">
    <tr><th>Nom</th><th>Fonction</th><th>Photo</th><th width="10%">Téléphone</th><th>Mail</th><th>Carte Pro</th></tr>
    <?php 
    foreach ($enseignants as $enseignant): 
    ?>
    <tr style="text-align: center; font-size: 0.8em;">
    	
    	<td><?= $enseignant->nom ?></td>
    	<td>Maitres d'armes</td>
    	<td>
    	<?php
    		if ($enseignant->nom == "Morgan Fraboulet") {
    			?>
    				<img src = "../webroot/img/morganfraboulet.png"   style="width:200px;" alt="morganfraboulet"/>
    			<?php
    		}
    		else {
    			?>
    				<img src = "../webroot/img/abrahamlegrand.png"   style="width:200px;" alt="abrahamlegrand"/>
    			<?php
    		}
    	?>
    	</td>
    	<td><?= $enseignant->tel ?></td>
    	<td><?= $enseignant->mail ?></td>
        <td><a href="<?= $enseignant->cartePro ?>">Carte Pro</a></td>


    </tr>
    <?php endforeach; ?>
    </table>
	</body>
</html>