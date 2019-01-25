<!DOCTYPE html>
<html>
<head>
	<title>Toutes les actualités</title>
    <?= $this->Html->css('style.css'); ?>
</head>
<body>



    <!-- Ici se trouve l'itération sur l'objet query de nos $posts, l'affichage des infos des articles -->

    <?php 
    foreach ($posts as $post): ?>
    <div class="container-fluid" style="border:solid; border-color: #424558; background-color:white;margin: 1%; padding: 0.1%;margin-left: 15%;margin-right: 15%" >
        <h3 style="color: black"><b><?= $post->title ?></b> <small>- (<?= $post->created ?>)</small></h3>
        <p><?= $post->body ?></p>
        
    </div>

    <?php endforeach; ?>

    <button onclick="window.location.href='http://localhost/paraderiposte/posts/index'" href="http://localhost/paraderiposte/posts/all" class="all">Retour</button>


</body>
</html>