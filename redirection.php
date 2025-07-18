<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Insta - Redirection</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <header class="flex justify-center">
        <img src="images/logo-miniInsta-removebg-preview.png" alt="">
    </header>

    <main>
        <section class="bg-white lg:grid  flex justify-center pt-10 px-5 dark:bg-gray-900 h-auto  h-screen">
            <div class="text-white text-center flex flex-col gap-3 text-3xl">
                <h1>✅ Image envoyée avec succès !</h1>
                <p>Ta photo a bien été ajoutée à la galerie.</p>
                <p>Tu peux maintenant revenir à la galerie pour la découvrir avec les autres œuvres.</p>
                <a target="_blank"
                    class="inline-block rounded border border-white-600 bg-pink-600 px-5 py-3 mt-5 font-medium text-white shadow-sm transition-colors hover:bg-pink-500"
                    href="galerie.php ">
                    Visite la Galerie
                </a>

                <a target="_blank"
                    class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-white-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-white"
                    href="index.php">
                    Retourne à l'acceuil
                </a>
            </div>
        </section>

    </main>



</body>

</html>