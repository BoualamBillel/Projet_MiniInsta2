<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini insta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>

    <main>
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



    </main>

    <footer>

    </footer>

</body>

</html>