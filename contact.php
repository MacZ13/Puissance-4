<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <meta name="description" content="memory">
    <link rel="stylesheet" href="assets/css/contacte.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
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

    <!-- Début du header -->

    <header>
        <div class="title">
            <h2>Nous contacter</h2>
    <!-- Titre du header -->

            <div class="contact">
                <div class="contener">
                    <p>06 05 04 03 02 01</p>
                </div>
                <div class="contener">
                    <p>support@powerofmemory</p>
                </div>
                <div class="contener">
                    <p>Paris</p>
                </div>
            <div class="imageContact">
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </div>
            </div>
        </div>

        <!-- Début du form -->

        <form>
            <div class="row">
                <div class="input-group">
                    <input type="text" id="name" required>
                    <label for="name"> Nom</label>
                </div>
                <div class="input-group">
                    <input type="text" id="Email" required>
                    <label for="email">Email</label>
                </div>
            </div>
        <div class="input-group">
            <input type="text" id="Sujet" required>
            <label for="sujet">Sujet</label>
        </div>
        <div class="input-group">
            <textarea name="message" id="message" rows="10" required></textarea>
            <label for="message">Message</label>
        </div>
        <button type="envoyer">Envoyer</button>
        </form>

        <!-- Fin du form -->

    </header>

    <!-- Fin du header -->


    <!-- Debut du footer -->

    <footer>

        <div class="footer">
            <div>
                <!-- La partie gauche du Footer-->
                <h2 class="Tittre-Footer">Information</h2>
    
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
                <h2 class="Tittre-Footer">Power Of Memory</h2>
                <!-- La partie a droite du Footer avec les liens-->
                <ul>
                    <li class="footerOrange"><a href=""><span class="gris2"> Jouer ! </span></a></li>
                    <li class="footerOrange"><a href=""><span class="gris2"> Les scores </span></a></li>
                    <li class="footerOrange"><a href="contact.html"><span class="gris2"> Nous contacter </span></a></li>
                </ul>
    
            </div>
        </div>

    </footer>

    <!-- Fin du footer -->

</body>
</html>