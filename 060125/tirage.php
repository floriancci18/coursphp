<?php
if(isset($_POST['submit']))
{
    // On vérifie si des apprenants sont coché
    if(!empty($_POST['apprennant']))
    {
        // Je compte le nombre d'élément dans mon tableau
        $taille = count($_POST['apprennant']); 
        $rand = rand(0,$taille-1);
        echo $_POST['apprennant'][$rand];
    }
    else
    {
        echo 'Veuillez sélectionner au moins 1 apprennant';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage au sort</title>
</head>
<body>
    <form name="tirage" method="POST" action="">
        <div>
            <input type="checkbox" name="apprennant[]" value="Imane"><label>Imane</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Stéphane"><label>Stéphane</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Imran"><label>Imran</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Tristan"><label>Tristan</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Hugo"><label>Hugo</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Romain"><label>Romain</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Ilan"><label>Ilan</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Tanguy"><label>Tanguy</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Jimmy"><label>Jimmy</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" value="Nicolas"><label>Nicolas</label>
        </div>
        <button type="submit" name="submit">Tirer au sort</button>
    </form>
</body>
</html>