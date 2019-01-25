<!DOCTYPE html>
<html>
<head>
    <title>Licenciés</title>    
    <?= $this->Html->css('style.css'); ?>
</head>
<body>

    <table border="solid" align="center">
        <tr><th width="3%">Id</th><th>Club</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>age</th><th>categorie</th><th>adresse</th><th>Code postal</th><th>Ville</th><th>Téléphone Fixe</th><th>Téléphone Portable</th><th>Mail</th><th>Cours 1</th><th>Cours 2</th><th width="3%"></th><th width="3%"></th></tr>
        <?php 
        foreach ($licencies as $licencie): 
        ?>
        <tr style="text-align: center; font-size: 0.8em;">
        
        <td><?= $licencie->id ?></td>
        <td><?= $licencie->club ?></td>
        <td><?= $licencie->nom ?></td>
        <td><?= $licencie->prenom ?></td>
        <td><?= $licencie->dateN ?></td>
        <td><?= $licencie->age ?></td>
        <td><?= $licencie->categorie ?></td>
        <td><?= $licencie->adresse ?></td>
        <td><?= $licencie->codeP ?></td>
        <td><?= $licencie->ville ?></td>
        <td><?= $licencie->telFixe ?></td>
        <td><?= $licencie->telPortable ?></td>
        <td><?= $licencie->mail ?></td>
        <td><?= $licencie->cours1 ?></td>
        <td><?= $licencie->cours2 ?></td>

        <td><a href="modif/<?= $licencie->id ?>"><center><img style="margin-top: 10%; margin-bottom: 10%" src="../webroot/img/logo_crayon.png" width="30px"></center></a></td>

        <td><a href="delete/<?= $licencie->id ?>"><center><img src="../webroot/img/logo_poubelle.png" width="30px"></center></a></td>

    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>