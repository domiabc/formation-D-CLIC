<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apprenant.css">
    <title>User Profiles</title>
</head>
<body>
            <?php include 'header.php' ?>
            
                <div class="container">
                    
                 
                       <?php 
                    include 'connexion1.php';
                    $reqProfile = mysqli_query($conn, "SELECT * FROM utilisateur ORDER BY ID_UTILISATEUR DESC");
                    
                    while ($rowProfile = mysqli_fetch_assoc($reqProfile) ) {
                    ?>
                    <div class="profi">
                        <div class="profil">
                        <img src="data:images/jpeg;base64,<?= base64_encode($rowProfile['PHOTO']) ?>" alt="Profile Photo">

                            <div class="civil">
                                <h1><?= $rowProfile['NOM'] ?><br><?= $rowProfile['PRENOM'] ?></h1>
                            </div>
                        </div>
                        <div class="des">
                            <div class="description">
                                <p><?= $rowProfile['DESCRIPTIO'] ?></p>
                                <div class="lien">
                                    
                                    <button><a href="./personal-portfolio-html-template/portfolio.php">Consulter mon portfolio</a></button>
                                    <button><a  href="mailto:<?= $rowProfile['EMAIL']?>">M'envoyer un message</a></button>
                                    <button><a href="#">Entretien en ligne</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
</body>
<?php include 'pieddepage.php' ?>
</html>