<?php include 'connexion1.php';

extract($_POST);
$req=@mysqli_query($conn, "INSERT INTO profil(LIBELLE_PROFIL) VALUES('$profil')");
header('Location:profil.php');
?>