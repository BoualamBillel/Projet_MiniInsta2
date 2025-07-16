<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = htmlspecialchars($_POST["nom"]);
    $photos = $_FILES["photo"];
    $tmpName = $photos["tmp_name"];
    $extension = strtolower($photos["name"], PATHINFO_EXTENSION);
    $extensionAutor = ["jpg", "jpeg", "gif", "webp", "png"];
    $dossier = "upload/";
    $nomFinal = date("Y-m-d-H-i-s") . "-" . $nom . "." . $extension;
    $chemin = $dossier . $nomFinal;

    if (!is_dir("upload/")) {
        mkdir("upload/");
    }

    if (in_array($extension, $extensionAutor)) {

        move_uploaded_file($tmpName, $chemin);
        header("Location: redirection.php");






    } else {
        echo "Extension non autorisée !";
    }
}