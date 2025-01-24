<?php
// Données des jeux (les mêmes que dans la page principale, mais pour la page 2)
$games = [
    ["../../public/assets/img/re4.jpg", "Resident Evil 4 - Standard Édition", "49,99€", "Redécouvrez l'horreur avec cette édition remastérisée. Disponible sur Steam, PlayStation 5, PlayStation 4, Xbox Series."],
    ["../../public/assets/img/ACNH.jpg", "Animal Crossing: New Horizons", "59,99€", "Créez votre île paradisiaque et vivez à votre rythme. Disponible uniquement sur Nintendo Switch."],
    ["../../public/assets/img/MGSV.jpg", "Metal Gear Solid V: The Phantom Pain", "49,99€", "Un jeu d'infiltration et d'action au gameplay révolutionnaire. Disponible sur Steam, PlayStation 4, Xbox One, PlayStation 5, Xbox Series."],
    ["../../public/assets/img/silenthill2.jpg", "Silent Hill 2", "69,99€", "Plongez dans l'horreur psychologique avec ce remake incroyable. Disponible sur Steam, PlayStation 5."],
    ["../../public/assets/img/yakuzazero.jpg", "Yakuza 0", "19,99€", "Découvrez les origines de la série Yakuza dans ce jeu d'action-aventure. Disponible sur Steam, PlayStation 4, Xbox One."],
    ["../../public/assets/img/parasocial.jpg", "[Chilla's Art] Parasocial | パラソーシャル", "7,79€", "Une expérience horrifique intense et unique. Disponible uniquement sur Steam."],
];

// Récupérer l'id du jeu depuis l'URL
$id = $_GET['id'] ?? null;

// Vérifier si l'id est valide
if ($id === null || !isset($games[$id])) {
    echo "Jeu introuvable !";
    exit;
}

$game = $games[$id];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $game[1]; ?></title>
    <link rel="stylesheet" href="../../public/assets/css/style-jeu-detail-page-2.css">
</head>
<body>

<div class="container">
    <h1><?php echo $game[1]; ?></h1>
    <img src="<?php echo $game[0]; ?>" alt="<?php echo $game[1]; ?>">
    <p><span>Prix :</span> <?php echo $game[2]; ?></p>
    <p><span>Description :</span> <?php echo $game[3]; ?></p>
    <a href="jeux_video_page.html.php" class="return-link">Retour à la liste des jeux</a>
</div>

</body>
</html>
