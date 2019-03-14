<!DOCTYPE html>
<html>
    <head>
        <title><?= $this->fetch('title'); ?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- Include external files and scripts here (See HTML helper for more info.) -->
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('script');
        echo $this->Html->css('menu');
        echo $this->fetch('css');
        ?>
    </head> 
    <body>

        <div id="header">
            <nav>
            <img src="../webroot/img/betonescrime.png" alt="Photo d'escrime" class="betonescrime" style="margin-bottom: 0px;" />
                <ul id= "menu">
                    <li class="menu-accueil"><a href="http://localhost/paraderiposte/posts/index">Accueil</a>
                        <ul class="submenu">
                            <li><a href="http://localhost/paraderiposte/posts/index">Actualit&#233;s</a></li>
                            <li><a href="http://localhost/paraderiposte/calendrier/index">Calendrier</a></li>
                            <li><a href="http://localhost/paraderiposte/Resultats/index">R&#233;sultats</a></li>
                            <li><a href="http://localhost/paraderiposte/Pratiques/index">Pratique</a></li>
                        </ul>
                    </li>
                    <li class="menu-club"><a href="club.html">Clubs</a>
                        <ul class="submenu">
                            <li><a href="http://localhost/paraderiposte/Enseignants/enseignant">Enseignants</a></li>
                            <li><a href="http://localhost/paraderiposte/clubs/stgregoire">Saint-Gr&#233;goire</a></li>
                            <li><a href="http://localhost/paraderiposte/clubs/betton">Betton</a></li>
                            <li><a href="http://localhost/paraderiposte/clubs/chevaigne">Chevaign&#233;</a></li>
                        </ul>
                    </li>
                    <li class="menu-actions"><a href="actions.html">Nos actions</a></li>
                    <li class="menu-sponsors"><a href="http://localhost/paraderiposte/partenaires/index">Nos partenaires</a></li>
                    <?php if($this->request->getSession()->read('user') != null) : ?>
                        <li><a href="#">Admin</a>
                            <ul class="submenu">
                                <li><a href="http://localhost/paraderiposte/Posts/admin">Posts</a></li>
                                <li><a href="http://localhost/paraderiposte/Evenements/admin">Evenements</a></li>
                                <li><a href="http://localhost/paraderiposte/Resultats/admin">Résultats</a></li>
                                <li><a href="http://localhost/paraderiposte/Clubs/admin">Clubs</a></li>
                                <li><a href="http://localhost/paraderiposte/Enseignants/admin">Enseignants</a></li>
                                <li><a href="http://localhost/paraderiposte/Licencies/index">Licenciés</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/paraderiposte/authentification/logout">Déconnexion</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>

        <!-- C'est ici que je veux voir mes vues être rendues -->
        <?= $this->fetch('content') ?>

    <!-- Ajoute un footer pour chaque page rendue -->
    <footer>
    <div id="footer" style="background-color: #424558; padding: 1%;">
        <table class="footer" style="margin: 0%; color: white;">
            <tr>
                <td>
                   <a href="https://www.facebook.com/escrime.bettonlatouche/?epa=SEARCH_BOX"> <img src="../webroot/img/fb_logo.png" width="10%" > </a>
                </td>
                <td><h4 style="color: white;"><u>Section Escrime du CS Betton</u></h4></td>
                <td><h4 style="color: white;"><u>Cercle d’Escrime de Chevaigné</u></h4></td>
                <td><h4 style="color: white;"><u>Association Grégorienne d’Escrime</u></h4></td>
            </tr>
            <tr>
                <small>
                <td><a href=""  style="color: white;">Mentions Légales</a></td>
                <td>12 rue de Rome 35830 Betton</td>
                <td>7 route de la Motte 35250 Chevaigné</td>
                <td>30 rue de Rennes 35137 Bédée</td>
                </small>
            </tr>
            <tr>
                <small>
                <td></td>
                <td>betton.escrime@orange.fr</td>
                <td>escrime.chevaigne@orange.fr</td>
                <td>contact@parade-riposte.net</td>
                </small>
            </tr>
            <tr>
                <small>
                <td></td>
                <td></td>
                <td>06.89.11.45.82</td>
                <td>06.81.56.19.18</td>
                </small>
            </tr>
        </table>

    </div>
    </footer>

    </body>
</html>