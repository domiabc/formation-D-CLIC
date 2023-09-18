<?php 

$server='Localhost';
$user='root';
$mdp='';
$database='hackathon_auf';
$conn=mysqli_connect($server,$user,$mdp,$database);
if(!$conn){
    echo "Connexion à la base de données échouée";
}else{
   
}

?>