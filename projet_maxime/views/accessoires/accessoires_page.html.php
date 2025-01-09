<?php
$pageTitle = "Accessoires - Matsuri";
$accessoires = [
    ["../../public/assets/img/porte-cle-torii.jpg", "Porte clé - Torii", "6,99€"],
    ["../../public/assets/img/maneki-neko.jpg", "Maneki neko", "7,99€"],
    ["../../public/assets/img/hachimaki.jpg", "Hachimaki", "4,99€"],
    ["../../public/assets/img/eventail-sakura.jpg", "Éventail - fleur de Sakura", "18,90€"],
    ["../../public/assets/img/masque-oni.jpg", "Masque Oni", "75,00€"],
    ["../../public/assets/img/ombrelle-sakura.jpg", "Ombrelle - fleur de Sakura", "29,90€"]
];
$currentPage = 1;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../../public/assets/css/style-accessoires.css">
</head>

<body>

    <header>
        <h1>ACCESSOIRES</h1>
        <div class="search-bar">
            <input type="text" placeholder="Recherche">
        </div>
    </header>

    <div class="accessories-container">
        <?php foreach ($accessoires as $accessoire): ?>
            <div class="accessory-card">
                <img src="<?php echo $accessoire[0]; ?>" alt="<?php echo $accessoire[1]; ?>">
                <h3><?php echo $accessoire[1]; ?></h3>
                <p><?php echo $accessoire[2]; ?></p>
                <div class="product-actions">
                    <button class="add-to-cart">Ajouter au Panier</button>
                    <button class="view-article">Voir l'Article</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include '../../includes/footer.php'; ?>
</body>

</html>
