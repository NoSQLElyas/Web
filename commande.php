<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prénom = $_POST["prénom"];
    $quantité = $_POST["quantité"];

    // Générer le contenu de la commande
    $contenu_commande = "Nom : " . $nom . "\n" . "Prénom : " . $prénom . "\n" . "Quantité : " . $quantité . "\n\n";

    // Enregistrer la commande dans un fichier texte
    $fichier_commandes = fopen("commandes.txt", "a");
    fwrite($fichier_commandes, $contenu_commande);
    fclose($fichier_commandes);

    // Afficher un message de succès
    echo "Votre commande a été enregistrée avec succès.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your site web mail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        nav {
            background-color: #666;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        section {
            padding: 2rem;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>your site web name</h1>
    </header>
    <nav>
        <ul>
            <li><a href="produits.php"><link>Produits</link></a></li>
        </ul>
    </nav>
    <section>
    <h2><link>Commandez</link></h2>
    <p>Veuillez remplir le formulaire ci-dessous pour passer votre commande :</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="prénom">Prénom :</label>
        <input type="text" id="prénom" name="prénom"><br><br>
        <label for="quantité">Quantité</label>
        <input type="text" id="quantité" name="quantité"><br><br>
        <input type="submit" value="Passer la commande">
    </form>
    <footer>
        <p>&copy; 2023 your organisation name -- &copy; your name</p>
    </footer>
</body>
</html>
