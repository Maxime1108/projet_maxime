<?php
$pageTitle = "Vêtements Traditionnels - Matsuri";
$clothes = [
    ["../../public/assets/img/kimono1.jpg", "Kimono en soie", "120,00€"],
    ["../../public/assets/img/yukata1.jpg", "Yukata d'été", "75,00€"],
    ["../../public/assets/img/haori1.jpg", "Haori brodé", "95,00€"],
    ["../../public/assets/img/hakama1.jpg", "Hakama élégant", "110,00€"],
    ["../../public/assets/img/obi1.jpg", "Ceinture Obi", "45,00€"],
    ["../../public/assets/img/zori1.jpg", "Sandales Zori", "30,00€"],
];
$currentPage = 1;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../../public/assets/css/style-vetements.css">
</head>

<body>
    <header>
        <h1>VÊTEMENTS TRADITIONNELS</h1>
        <div class="search-bar">
            <input type="text" placeholder="Recherche">
        </div>
    </header>

    <div class="clothes-container">
        <?php foreach ($clothes as $clothing): ?>
            <div class="clothing-card">
                <img src="<?php echo $clothing[0]; ?>" alt="<?php echo $clothing[1]; ?>">
                <h3><?php echo $clothing[1]; ?></h3>
                <p><?php echo $clothing[2]; ?></p>
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
