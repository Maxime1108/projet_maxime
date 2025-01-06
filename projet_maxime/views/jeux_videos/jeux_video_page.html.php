<?php
$pageTitle = "Jeux Vidéo - Matsuri";
$games = [
    ["img/mariokart8.jpg", "Mario Kart 8 Deluxe", "49,99€"],
    ["img/ff7remake.jpg", "Final Fantasy VII Remake", "79,99€"],
    ["img/zelda.jpg", "The Legend of Zelda: Breath of the Wild", "49,99€"],
    ["img/DeathStrandingDirectorsCut.jpg", "Death Stranding Director's Cut", "39,99€"],
    ["img/darksouls3.jpg", "Dark Souls III", "59,99€"],
    ["img/re2.jpg", "Resident Evil 2", "39,99€"],
];
$currentPage = 1;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style-jeux-video.css">
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
        <button class="active" onclick="location.href='jeux_video_page.php'">1</button>
        <button onclick="location.href='jeux_video_page2.php'">2</button>
    </div>

<?php include 'includes/footer.php'; ?>

</body>

</html>
