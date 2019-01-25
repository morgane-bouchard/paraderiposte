<!-- File: src/Template/Posts/index.ctp -->
<!DOCTYPE html>
<html>
<head>
    <title>Evenements</title>
</head>
<body style="background-color: #003366">



    <!-- Ici se trouve l'itération sur l'objet query de nos $evenements, l'affichage des infos des articles -->

    <?php 
    foreach ($evenements as $evenement): ?>
    <div class="container-fluid" style="background-color:white;margin: 1%; padding: 0.1%;margin-left: 15%;margin-right: 15%; " >
        <h3 style="color: black"><b><?= $evenement->titre ?></b> <small>- (<?= $evenement->date ?>)</small></h3>
        <p><?= $evenement->description ?></p>
        
    </div>

    <?php endforeach; ?>


</body>
</html>