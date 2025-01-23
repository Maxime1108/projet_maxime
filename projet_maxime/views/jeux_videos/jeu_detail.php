<?php
// Données des jeux (les mêmes que dans la page principale)
$games = [
    ["../../public/assets/img/mariokart8.jpg", "Mario Kart 8 Deluxe", "49,99€", "Un jeu de karting excitant pour toute la famille."],
    ["../../public/assets/img/ff7remake.jpg", "Final Fantasy VII Remake", "79,99€", "Redécouvrez l'univers mythique de Final Fantasy VII."],
    ["../../public/assets/img/zelda.jpg", "The Legend of Zelda: Breath of the Wild", "49,99€", "Un monde ouvert incroyable pour une aventure épique."],
    ["../../public/assets/img/DeathStrandingDirectorsCut.jpg", "Death Stranding Director's Cut", "39,99€", "Un jeu unique mêlant exploration et narration."],
    ["../../public/assets/img/darksouls3.jpg", "Dark Souls III", "59,99€", "Affrontez des ennemis redoutables dans cet RPG sombre."],
    ["../../public/assets/img/re2.jpg", "Resident Evil 2", "39,99€", "Survivez à l'horreur dans ce remake acclamé."],
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
    <link rel="stylesheet" href="../../public/assets/css/style-jeu-detail.css">
</head>
<body>

    <h1><?php echo $game[1]; ?></h1>
    <img src="<?php echo $game[0]; ?>" alt="<?php echo $game[1]; ?>" style="width: 300px;">
    <p>Prix : <?php echo $game[2]; ?></p>
    <p>Description : <?php echo $game[3]; ?></p>

    <a href="jeux_video_page.html.php">Retour à la liste des jeux</a>

</body>
</html>
