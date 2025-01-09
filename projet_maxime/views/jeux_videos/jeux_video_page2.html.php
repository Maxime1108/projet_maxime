<?php
$pageTitle = "Jeux Vidéo - Matsuri";
$games = [
    ["../../public/assets/img/re4.jpg", "Resident Evil 4 - Standard Édition", "49,99€"],
    ["../../public/assets/img/ACNH.jpg", "Animal Crossing: New Horizons", "59,99€"],
    ["../../public/assets/img/MGSV.jpg", "Metal Gear Solid V: The Phantom Pain", "49,99€"],
    ["../../public/assets/img/silenthill2.jpg", "Silent Hill 2", "69,99€"],
    ["../../public/assets/img/yakuzazero.jpg", "Yakuza 0", "19,99€"],
    ["../../public/assets/img/parasocial.jpg", "[Chilla's Art] Parasocial | パラソーシャル", "7,79€"], 
];
$currentPage = 2;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../../public/assets/css/style-jeux.css">
</head>

<body>

    <header>
        <h1>JEUX VIDÉO</h1>
        <div class="search-bar">
            <input type="text" placeholder="Recherche">
        </div>
    </header>

    <div class="games-container">
        <?php foreach ($games as $game): ?>
            <div class="game-card">
                <img src="<?php echo $game[0]; ?>" alt="<?php echo $game[1]; ?>">
                <h3><?php echo $game[1]; ?></h3>
                <p><?php echo $game[2]; ?></p>
                <div class="product-actions">
                    <button class="add-to-cart">Ajouter au Panier</button>
                    <button class="view-article">Voir l'Article</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <button onclick="location.href='jeux_video_page.html.php'">1</button>
        <button class="active" onclick="location.href='jeux_video_page2.html.php'">2</button>
    </div>

<?php include '../../includes/footer.php'; ?>

</body>

</html>
