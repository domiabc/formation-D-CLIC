<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="formulaire.css">
  <title>Document</title>
</head>
<body>

 <?php
         include "header.php";
         ?>
<h1>Inscription</h1>
                               
                            
                               <form action="traitement.php" method="POST" enctype="multipart/form-data">
                                                          <div class="formulaire"> 
                                                                    <label >Nom</label> 
                                                                    <input type="text" name="nom" />
                                                                    <label >Prénom</label> 
                                                                    <input type="text"  name="PRENOM"/>
                                                                    <label >Profil</label>
                                                                    <select name="profil" id="">
                          
                                                             <?php
                                                             include "connexion1.php";
                                                              $reqProfile = mysqli_query($conn, "SELECT * FROM profil");
                                                                   while($rowProfile = mysqli_fetch_assoc($reqProfile)){ 
                                                                     ?>
                                                                    <option value="<?=$rowProfile['ID_PROFIL']?>"><?=$rowProfile['LIBELLE_PROFIL']?></option>
                                                                <?php
                                                                   }
                           
                                                                 ?>
                                                            </select> 
                                                                     
                                                                    <label >Téléphone</label> 
                                                                    <input type="text"  name="TELEPHONE"/>
                                                                    <label >Ville</label> 
                                                                    <input type="text"  name="VILLE"/>
                                                                    <label >Email</label> 
                                                                    <input type="text"  name="EMAIL"/>
                                                                    <label >Mot de passe</label> 
                                                                    <input type="text"  name="MOT_DE_PASSE"/>
                                                                    <label >Description</label> 
                                                                    <input type="text"  name="DESCRIPTIO"/>
                                                                    <label for="">Photo de profil</label>
                                                                    <input type="file" name="photo"> <br>
                                                                    <button type="submit" class="soumettre">Enregister</button>
                                                           </div>

                                                           
                                                    
                                                   
                                                 
                                                         
                                                               
                               </form>   <!-- Basic Form End-->

 

  
</body>
 
</html>