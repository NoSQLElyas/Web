<?php
// Détails du produit (simulés)
$produit = array(
    'nom' => 'Pain au Chocolat',
    'prix' => 1,
    'description' => 'Un pain au chocolat.',
    'terminé' => 'Toute les commandes sont récupérables a partir de la récréation de 10h le lundi.'
);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $produit['nom']; ?></title>
</head>
<body>
    <h1><?php echo $produit['nom']; ?></h1>
    <p>Prix : <?php echo $produit['prix']; ?> €</p>
    <p>Description : <?php echo $produit['description']; ?></p>
    <p> <?php echo $produit['terminé']; ?></p>
    <li><a href="commande.php">Commandez</a></li>
    <footer>
        <p>&copy; 2023 Collège Albert Camus -- &copy; Damien</p>
    </footer>
</body>
</html>