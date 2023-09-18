<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1{
        font: size 20px;
        text-align:center;
        }
        .te {
            text-align:center;
            width:40%;
            font-size:20px;
            margin-left:20%;
        }

    </style>
<h1>Ajouter un profil</h1>
<form action="traitement_profil.php" method="POST">
    <input type="text" name="profil" class="te" placeholder="profil">
    <input type="submit" value="Ajouter">
</form>
</body>
</html>

