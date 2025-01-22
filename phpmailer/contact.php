<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contact</title>
</head>
<body>
    <h1>Nous contacter</h1>
    <form name="contact" method="POST" action="formulaire.php">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="sujet">Sujet :</label>
            <input type="text" name="sujet">
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea name="message"></textarea>
        </div>
        <div>
            <label for="captcha">Répéter le captcha:</label>
            <img src="captcha.php" alt="Mon Captcha">
            <input type="text" name="captcha">
        </div>
        <button type="submit" name="submit">Nous contacter</button>
    </form>
</body>
</html>