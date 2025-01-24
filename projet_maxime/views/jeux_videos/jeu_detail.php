<?php
$games = [
    ["../../public/assets/img/mariokart8.jpg", "Mario Kart 8 Deluxe", "49,99€", "Un jeu de karting excitant pour toute la famille. Disponible uniquement sur Nintendo Switch."],
    ["../../public/assets/img/ff7remake.jpg", "Final Fantasy VII Remake", "79,99€", "Redécouvrez l'univers mythique de Final Fantasy VII. Disponible sur Steam, PlayStation 4, PlayStation 5." ],
    ["../../public/assets/img/zelda.jpg", "The Legend of Zelda: Breath of the Wild", "49,99€", "Un monde ouvert incroyable pour une aventure épique. Disponible uniquement sur Nintendo Switch."],
    ["../../public/assets/img/DeathStrandingDirectorsCut.jpg", "Death Stranding Director's Cut", "39,99€", "Un jeu unique mêlant exploration et narration. Disponible sur Steam, PlayStation 5, PlayStation 4."],
    ["../../public/assets/img/darksouls3.jpg", "Dark Souls III", "59,99€", "Affrontez des ennemis redoutables dans cet RPG sombre. Disponible sur Steam, PlayStation 4, Xbox One."],
    ["../../public/assets/img/re2.jpg", "Resident Evil 2", "39,99€", "Survivez à l'horreur dans ce remake acclamé. Disponible sur Steam, PlayStation 5, PlayStation 4, Nintendo Switch."],
];

$id = $_GET['id'] ?? null;

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
    <link rel="stylesheet" href="../../public/assets/css/style-jeu-detail.css">
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
