<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Insta - Galerie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>

    <main>
        <section class="affichage">
            <?php
            $photos = scandir("upload/");
            $extensionAutor = ["jpg", "jpeg", "gif", "webp", "png"];

            rsort($photos);


            foreach ($photos as $photo) {


                $extension = pathinfo($photo, PATHINFO_EXTENSION);


                if ($photo !== "." && $photo !== "..") {

                    if (in_array($extension, $extensionAutor)) {


                        echo '<img src="upload/' . htmlspecialchars($photo) . '"alt="photo">';





                    }
                }
            }

            ?>
        </section>
    </main>

    <footer>

    </footer>

</body>

</html>