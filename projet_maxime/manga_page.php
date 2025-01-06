<?php
$pageTitle = "Mangas - Matsuri";
$mangas = [
    ["img/demonslayer.jpg", "Demon Slayer - Intégrale", "167,67€", "#1 DES VENTES"],
    ["img/yourname.jpg", "Your Name - Intégrale", "21,95€"],
    ["img/yourlieinapril.jpg", "Your Lie in April - Intégrale", "65,00€"],
    ["img/dandadan.jpg", "DanDaDan - Intégrale", "96,96€"],
    ["img/asilentvoice.jpg", "A Silent Voice - Intégrale", "46,20€"],
    ["img/horimiya.jpg", "Horimiya - Intégrale", "70,00€"],
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style-mangas.css">
</head>

<body>
    <header>
        <h1>MANGAS</h1>
        <div class="search-bar">
            <input type="text" placeholder="Recherche">
        </div>
    </header>

<div class="manga-container">
    <?php foreach ($mangas as $index => $manga): ?>
        <div class="manga-card">
            <?php if (isset($manga[3])): ?>
                <span class="top-sale"><?php echo $manga[3]; ?></span>
            <?php endif; ?>
            <img src="<?php echo $manga[0]; ?>" alt="<?php echo $manga[1]; ?>">
            <h3><?php echo $manga[1]; ?></h3>
            <p><?php echo $manga[2]; ?></p>
            <div class="buttons">
                <button class="add-to-cart">Ajouter au Panier</button>
                <button class="view-article">Voir l'Article</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
