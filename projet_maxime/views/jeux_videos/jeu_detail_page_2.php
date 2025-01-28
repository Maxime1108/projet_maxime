<?php
$games = [
    ["../../public/assets/img/re4.jpg", "Resident Evil 4 - Standard Édition", "49,99€", "Resident Evil 4 Remake, développé par Capcom, réimagine le classique de 2005 avec des graphismes modernes et un gameplay optimisé. Vous incarnez Leon S. Kennedy, en mission pour sauver la fille du président dans un village isolé infesté de dangers. Le jeu mêle action, horreur et tension dans une ambiance intense et immersive. Disponible sur Steam, PlayStation 5, PlayStation 4, Xbox Series."],
    ["../../public/assets/img/ACNH.jpg", "Animal Crossing: New Horizons", "59,99€", "Animal Crossing: New Horizons, développé par Nintendo, vous invite à bâtir votre propre île paradisiaque. En tant que nouvel habitant, vous explorez, personnalisez et développez votre île tout en interagissant avec des animaux adorables. Avec son ambiance relaxante et sa liberté créative, le jeu offre une expérience paisible et immersive. Disponible uniquement sur Nintendo Switch."],
    ["../../public/assets/img/MGSV.jpg", "Metal Gear Solid V: The Phantom Pain", "49,99€", "Metal Gear Solid V: The Phantom Pain, développé par Kojima Productions et publié par Konami, suit Venom Snake dans sa quête de vengeance après la destruction de sa base. Dans un monde ouvert en pleine guerre froide, le jeu mêle infiltration, action et narration complexe, offrant une liberté stratégique sans précédent. Disponible sur Steam, PlayStation 4, Xbox One, PlayStation 5, Xbox Series."],
    ["../../public/assets/img/silenthill2.jpg", "Silent Hill 2", "69,99€", "Silent Hill 2 Remake, développé par Bloober Team et publié par Konami, revisite le chef-d'œuvre de l'horreur psychologique. Vous incarnez James Sunderland, qui explore la ville brumeuse de Silent Hill après avoir reçu une lettre de sa femme décédée. Avec des graphismes époustouflants et une ambiance oppressante, le jeu plonge dans une quête troublante entre mystère et terreur. Disponible sur Steam et PlayStation 5."],
    ["../../public/assets/img/yakuzazero.jpg", "Yakuza 0", "19,99€", "Yakuza 0, développé par Sega, sert de préquel à la série Yakuza. Vous incarnez Kazuma Kiryu et Goro Majima, deux membres de la pègre japonaise, dans un Tokyo et Osaka des années 1980. Entre combats intenses, mini-jeux et une narration captivante, le jeu explore la vie des Yakuza tout en offrant une immersion dans la culture japonaise. Disponible sur Steam, PlayStation 4, Xbox One."],
    ["../../public/assets/img/parasocial.jpg", "[Chilla's Art] Parasocial | パラソーシャル", "7,79€", "Parasocial, développé par Chilla's Art, est un jeu d'horreur psychologique où vous incarnez une fille nommée Nina, une VTuber qui se fait appeler Senra Nina et qui gagne sa vie en diffusant des jeux en streaming. Vous vivez seule dans un appartement, après avoir terminé un jeu envoyé par un téléspectateur, votre visage est soudainement révélé. Les choses commencent à devenir très inconfortables, car un harceleur masqué commence à traquer Nina et à lui envoyer d'autres jeux auxquels elle doit jouer. Disponible uniquement sur Steam."],
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
