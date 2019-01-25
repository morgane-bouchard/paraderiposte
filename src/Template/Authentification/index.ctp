<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <?= $this->Html->css('style2.css'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <?php if(isset($messageErreur) && ($messageErreur)){ ?>
            <div class="alert alert-danger" role="alert" style="text-align: center; margin-left: 25%; margin-right: 25%;
             border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                <p>Mauvais login ou mauvais mot de passe, l'attaque est tombée dans le vide !</p>
            </div>
        <?php } ?>
        <div id="container">
            <!-- zone de connexion -->          
            <form action="http://localhost/paraderiposte/authentification/login" method="POST">
                <h1>Connexion</h1>                 
                <input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
    </body>
</html>