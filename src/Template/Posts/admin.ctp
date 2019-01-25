<!DOCTYPE html>
<html>
<head>
	<title>Liste des Posts</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>
	

    <table border="solid" align="center">
    <tr><th>Id</th><th>Titre</th><th>Texte</th><th>Date de création</th><th>Suppression</th></tr>
    <?php 
    foreach ($posts as $post): ?>
    <tr style="text-align: center; ">
    	
    	<td><?= $post->id ?></td>
    	<td><?= $post->title ?></td>
    	<td style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" ><?= $post->body ?></td>
    	<td><?= $post->created ?></td>

    	<td><a href="delete/<?= $post->id ?>"><center><img src="../webroot/img/logo_poubelle.png" width="30px"></center></a></td>

    </tr>
    <?php endforeach; ?>

    </table>

    <button onclick="window.location.href='postadd'" class="all">Ajouter un post</button>

</body>
</html>