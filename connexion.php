<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/inscri.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css"> 
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
    <title>Connexion</title>
</head>


<body>
        <!-- Début de la barre de navigation -->

        <nav>
            <div class="logo">
                <h1>The power Of Memory</h1>
            </div>
            <ul class="nav-links">
                <li><a class="links" href="index.html">Accueil</a></li>
                <li><a class="links" href="#">Jeu</a></li>
                <li><a class="links" href="scoreboard.html">Scores</a></li>
                <li><a class="links" href="contact.html">Nous contacter</a></li>
            </ul>
        </nav>
    
        <!-- Fin de la barre de navigation -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/inscri.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
    <title>Connexion</title>
</head>

<body>


    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Inprotation du header -->

    <header>
        <div class="title">
            <h2>Connexion</h2>
            <section class="login-container">
                <div>
                    <form action="" method="post">
                        <input type="text" name="mail" placeholder="Email" required />
                        <input type="password" name="password" placeholder="Mot de passe" required />
                        <button type="submit">Connexion</button>
                    </form>
                </div>
            </section>


            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->

</body>
    


    <section class="login-container">
        <div>
            <form action="" method="post">
                <input type="text" name="mail" placeholder="Email" required />
                <input type="password" name="password" placeholder="Mot de passe" required />
                <button type="submit">Connexion</button>
            </form>
        </div>
    </section>

<!-- Debut du footer -->

<footer>

    <div class="footer">
        <div>
            <!-- La partie gauche du Footer-->
            <h2 class="Tittre-footer">Information</h2>

            <p class="gris">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><strong class="footerOrange">Tel :</strong><span class="gris"> 06 05 04 03 02</span></p>
            <p><strong class="footerOrange">Email :</strong><span class="gris"> support@powerofmemory.com</span></p>
            <p><strong class="footerOrange">Location :</strong><span class="gris"> Paris</span></p>

            <div class="imageLiens">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-google"></i></a>
                <a href=""><i class="fa fa-pinterest"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
            </div>

            <p class="copyright">Copyright © 2022 Tous droits réservés</p>

        </div>

        <div>
            <h2 class="Tittre-footer">Power Of Memory</h2>
            <!-- La partie a droite du Footer avec les liens-->
            <ul>
                <li class="footerOrange"><a href=""><span class="gris2"> Jouer ! </span></a></li>
                <li class="footerOrange"><a href=""><span class="gris2"> Les scores </span></a></li>
                <li class="footerOrange"><a href=""><span class="gris2"> Nous contacter </span></a></li>
            </ul>

        </div>
    </div>

</footer>

<!-- Fin du footer -->

</body>
</html>