<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Insta - Galerie</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <header class="flex justify-center">
        <img src="images/logo-miniInsta-removebg-preview.png" alt="">
    </header>

    <main>
        <section class="bg-white lg:grid  flex justify-center pt-10 px-5 dark:bg-gray-900 h-auto items-center flex-col">
            
                <a target="_blank"
                    class="inline-block rounded border border-white-600 bg-pink-600 px-5 py-3 mt-5 font-medium text-white shadow-sm transition-colors hover:bg-pink-500 flex justify-center items-center"
                    href="upload.php">
                    Upload ta Photo
                </a>

                <a target="_blank"
                    class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-white-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-white flex items-center justify-center m-5"
                    href="index.php">
                    Retourne à l'acceuil
                </a>
            <div class="text-white text-lg text-center flex flex-col gap-3">
                <h1 class="text-bold text-2xl">🎨 La Galerie</h1>
                <p class="text-xl">Un mur d’inspiration, une toile vivante.</p>
                <p class="text-xl">Chaque photo ici est un éclat de créativité, une vision partagée.</p>
                <p class="text-xl">Explore, ressens, et laisse-toi emporter par l’art des autres.</p>
            </div>
        </section>
        <section class="affichage">
            <?php
            $photos = scandir("upload/");
            $extensionAutor = ["jpg", "jpeg", "gif", "webp", "png"];

            rsort($photos);


            foreach ($photos as $photo) {


                $extension = pathinfo($photo, PATHINFO_EXTENSION);


                if ($photo !== "." && $photo !== "..") {

                    if (in_array($extension, $extensionAutor)) {


                        echo '<div class="item"> <img src="upload/' . htmlspecialchars($photo) . '"alt="photo"></div>';





                    }
                }
            }

            ?>
        </section>
    </main>


</body>

</html>