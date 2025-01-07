<?php
// Liste des extensions autorisées
$extension = ['.jpg','.png','.pdf','.JPG','.PNG','.PDF'];
// Si le formulaire à été soumis
if(isset($_POST['kenza']))
{
    // Je vérifie si un fichier à été envoyé
    if(is_uploaded_file($_FILES['fichier']['tmp_name']))
    {
        // Pour récupérer l'extension du fichier j'utilise strrchr()
        

        $verif_ext = strrchr($_FILES['fichier']['name'],'.');
        // Je vérifie si l'extension est dans le tableau avec in_array()
        if(in_array($verif_ext,$extension))
        {
            // Pour renommer le fichier envoyé à la volée
            $nouveau_nom = uniqid().$verif_ext;
            // Je déplace le fichier temporaire vers sa destination finale
            if(move_uploaded_file($_FILES['fichier']['tmp_name'],'upload/'.$nouveau_nom))
            {
                // Je redirige l'utilisateur vers le fichier envoyé
               header('location:upload/'.$nouveau_nom);
            }
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de fichier</title>
</head>
<body>
    <h1>Envoyer un fichier</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <div>
            <label for="fichier">Fichier</label>
            <input type="file" name="fichier">
        </div>
        <button type="submit" name="kenza">Envoyer</button>
    </form>
</body>
</html>