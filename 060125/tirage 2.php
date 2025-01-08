<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage au sort</title>
    <link rel="stylesheet" href="tirage.css">
</head>
<body>
    <div id="resultat"></div>
    <form id="tirage" name="tirage" method="POST" action="resultat.php">
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Imane"><label>Imane</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Stéphane"><label>Stéphane</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Imran"><label>Imran</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Tristan"><label>Tristan</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Hugo"><label>Hugo</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Romain"><label>Romain</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Ilan"><label>Ilan</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Tanguy"><label>Tanguy</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Jimmy"><label>Jimmy</label>
        </div>
        <div>
            <input type="checkbox" name="apprennant[]" checked="checked" value="Nicolas"><label>Nicolas</label>
        </div>
        <div>
            <button type="submit" id="tirer" name="tirer">Tirer au sort</button>
</div>  
        </form>
    <script src="tirage.js"></script>
</body>
</html>