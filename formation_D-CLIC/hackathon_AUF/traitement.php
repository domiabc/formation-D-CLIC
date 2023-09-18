<?php 
 

 
include 'connexion1.php';
 
extract($_POST);

 

 
$reqCV = mysqli_query($conn, "SELECT * FROM cv");
if ($reqCV && mysqli_num_rows($reqCV) > 0) {
    $rowCV = mysqli_fetch_assoc($reqCV); 
        $ID_CV = $rowCV['ID_CV'];
    }
 else {
    $message = "Aucun CV disponible";
}

$image = false;

if (isset($_FILES["photo"]["tmp_name"]) && is_uploaded_file($_FILES["photo"]["tmp_name"])) {
    $imagePath = $_FILES["photo"]["tmp_name"];
    $image = file_get_contents($imagePath);

    if ($image === false) {
        echo "Error reading image file.";
    }
} else {
    echo "No file uploaded or file upload failed.";
}

 
 
file_put_contents('img/'.$_FILES["photo"]["name"], $image);



 
$query = "INSERT INTO utilisateur(ID_PROFIL, NOM, PRENOM, TELEPHONE, VILLE, EMAIL, MOT_DE_PASSE, DESCRIPTIO, PHOTO)
     VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);

 
$stmt->bind_param("issssssss", $profil, $nom, $PRENOM, $TELEPHONE, $VILLE, $EMAIL, $MOT_DE_PASSE, $DESCRIPTIO, $image);

 
if ($stmt->execute()) {
    header('Location: formulaire.php');
} else {
    echo "Erreur lors de l'insertion : " . $stmt->error;
}

$stmt->close();
$conn->close();

?>

