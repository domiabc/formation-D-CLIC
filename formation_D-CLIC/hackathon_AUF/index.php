<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/accueil.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <?php include "header.php"?>
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
</head>
<body>
 
<section id="home">
        <h4>Forum D-CLIC Pro</h4>
        <h4>Former vous aux numerique avec l'OIF</H4><
        <h5><p>Pour renforcer les compétences numériques des jeunes de l’espace francophone <br>
            et multiplier leurs chances d’accéder à des emplois décents, en entreprises et dans<br> 
            l’entreprenariat, l’OIF met en œuvre le programme « D-CLIC, formez-vous au numérique ».</p></h5>
        <a href="formulaire.php" class="btn-reservation">Inscription</a>
        <span>&nbsp;</span> <span>&nbsp;</span> 
            <span class="texte-dynamique"> 
                <span><h2>Formez-vous Aujourd'hui pour Innover Demain</h2></span>
                <span><h2>Votre partenaire privilégié en bilan de compétences</h2></span>
                <span><h2> Votre Pass vers l'Excellence Digitale</h2></span></span> 
    </section>
    <div class="presentation ">
        <p>
        Découvrez le futur du numérique avec D-clic pro, une expérience de formation <br>
         immersive qui prend vie au cœur de la vibrante ville de Bobo. Entrez dans un <br>
          monde où la technologie et l'innovation se rencontrent, et où les compétences <br>
           numériques deviennent des atouts inestimables. À Bobo, nous vous invitons à <br>
           plonger dans une aventure d'apprentissage unique, entourés par l'énergie créative <br>
            de la ville. Explorez les domaines du digital les plus pointus tout en vous <br>
            connectant avec des esprits similaires. Rejoignez-nous pour découvrir comment <br>D-clic 
            pro et Bobo fusionnent pour créer une opportunité incomparable d'apprentissage, 
             de croissance et de connexion.
        </p>
        <img src="./image/tchad.jpg" alt="">
    </div>
    <h1>  D-CLIC au BURKINA FASO </h1>
    <div class="presentation_Dclic">
         <img src="./image/D-CLIC.jpg" alt="">
        <p>Le programme D-CLIC de L'Organisation Internationale de la Francophonie <br>
            forme plus de 250 jeunes aux métiers du numérique au Burkina Faso, dans 
            <br>les villes de Ouagadougou, Bobo Dioulasso et Koudougou.. Ce programme <br>
             hébergé par l'Agence Universitaire de la Francophonie se voit comme 
            un acteur de formation et d'insertion professionnelle des jeunes dans le <br>
             domaine du numérique.
        </p>
    </div> 
    <h1>  Insertion professionnelle</h1>
    <div class="presentation_ ">
    
        <p>D-CLIC, où l'élégance de l'apprentissage rencontre la sophistication de l'insertion
        <br> professionnelle. Au-delà de nos formations haut de gamme, nous tissons les fils du
        <br> succès en connectant nos apprenants au monde professionnel du digital. Nos partenariats
        <br> soigneusement choisis leurs ouvrent des portes d'opportunités uniques pour exprimer leur
        <br> créativité digitale et construire une carrière florissante. Découvrez comment notre 
        <br>engagement  envers l'excellence nos apprenants les propulse dans un avenir numérique 
        <br>passionnant, où les 
        compétences deviennent des réussites concrètes. D-CLIC: éduquer, élever, insérer vers le sommet du digital.</p>
        <img src="./image/insertion.jpg" alt="">
    </div>
   
        

</body>
<?php include "pieddepage.php" ?>
 <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
   
    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
</html>
