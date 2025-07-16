<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Insta - Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800 p-4">
    <section class="upload-info">
        <h1>📤 Ajoute ta touche</h1>
        <p>Partage ton regard, dépose ton image.</p>
        <p>Formats acceptés : JPG, JPEG, PNG, GIF, WEBP.</p>
        <p> Chaque photo envoyée est un trait de plus sur notre toile collective.</p>
    </section>
    <section class="formulaire">
            <form action="traitement.php" method="post" enctype="multipart/form-data">
                <label for="nom">Saisir votre Nom :</label>
                <input type="text" name="nom" id="nom">
                <label for="photo">Saisir votre Photo :</label>
                <input type="file" name="photo" id="photo">
                <button type="submit">Envoyer !</button>
            </form>
            <button><a href="galerie.php" target="_blank" rel="noopener noreferrer">Acceder à la Galerie !</a></button>
        </section>
    
</body>
</html>