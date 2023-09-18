<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    
    <headers>
        <div class="logo">
            <a href="index.php">
                <img class="oif" src="image/LOGO-OIF.jpg" alt="Logo OIF">
                <img src="image/logo auf.png" alt="Deuxième Logo">
            </a>
        </div>
        <style>
            /* Vos autres styles CSS ici */
    
            .logo a {
                display: flex;
                align-items: center;
                text-decoration: none;
                font-size: 50px;
                color: #29d9d5;
            }
    
            .logo img {
                max-width: 140px; /* Ajustez la largeur maximale selon vos besoins */
                height: auto;
                margin-right: 20px; /* Ajoute un peu d'espace entre les logos */
            }
        </style>
        <div class="logo">
            <a img href="images/LOGO-OIF.jpg" ></a>
        </div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="apropos.php">A propos</a></li>
            <li><a href="apprenant.php">Apprenant</a></li>
            <li><a href="entreprise.php">Entreprise</a></li>
            <li><a href="evenement.php">Evènements</a></li>
            <li><a href="blog.php">Blog</a></li>
            <form action="form">
                <input class="submit" type="text">
                <input class="ok" type="submit" value="OK">
             </form>
        </ul>
        <a href="connexion.php" class="btn-reservation">Connexion</a>

        <div class="responsive-menu"></div>
    </headers>
    <!-- acceuil section -->
    
                <!--<video src="images/video.mp4" autoplay loop></video>-->
    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>


</body>
</html>