<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Insta - Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>


<body bg->
    <header class="flex justify-center">
        <img src="images/logo-miniInsta-removebg-preview.png" alt="">
    </header>
    <main>
        <section class="bg-white lg:grid  flex justify-center pt-10 px-5 dark:bg-gray-900 h-auto">
            <div class="text-lg text-center flex flex-col gap-3 dark:text-white">
                <h1 class="text-xl font-bold">📤 Ajoute ta touche</h1>
                <div class="flex gap-2 flex-col">
                    <p>Partage ton regard, dépose ton image.</p>
                    <p>Formats acceptés : JPG, JPEG, PNG, GIF, WEBP.</p>
                    <p> Chaque photo envoyée est un trait de plus sur notre toile collective.</p>
                </div>
            </div>
        </section>
        <section class="bg-white lg:grid lg:h-screen pt-10 px-5 dark:bg-gray-900 h-screen">
            <div class="text-lg text-center flex flex-col gap-3 items-center dark:text-white">
                <form class="flex items-center flex-col text-center flex-wrap gap-3"
                    action="traitement.php" method="post" enctype="multipart/form-data">
                    <label for="nom">Saisir votre Nom :</label>
                    <input class="bg-pink-600 border border-gray-300 text-white text-lg text-center dark:bg-white dark:text-pink-600" type="text" name="nom" id="nom">
                    <label for="photo">Saisir votre Photo :</label>
                    <input class="hover:bg-pink-600" type="file" name="photo" id="photo">
                    <button   class="border border-gray-300 p-2 hover:bg-pink-500"  type="submit">Envoyer !</button>
                </form>
                <a 
                    class="inline-block rounded border border-white-600 bg-pink-600 px-5 py-3 mt-5 font-medium text-white shadow-sm transition-colors hover:bg-pink-500"
                    href="galerie.php ">
                    Visite la Galerie
                </a>

                <a 
                    class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-white-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-white"
                    href="index.php">
                    Retourne à l'acceuil
                </a>
            </div>
        </section>
    </main>


</body>

</html>