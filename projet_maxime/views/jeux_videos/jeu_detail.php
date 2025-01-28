<?php
$games = [
    ["../../public/assets/img/mariokart8.jpg", "Mario Kart 8 Deluxe", "49,99€", "Mario Kart 8 Deluxe est un jeu de course de la série Mario Kart, portage de Mario Kart 8. Sorti exclusivement sur Nintendo Switch le 28 avril 2017 dans le monde, le jeu conserve les 48 circuits du jeu d'origine parmi lesquels les 16 circuits qui sont sortis en tant que contenu téléchargeable sur Wii U. Ils sont d'ailleurs tous disponibles dès le début. Disponible uniquement sur Nintendo Switch."],
    ["../../public/assets/img/ff7remake.jpg", "Final Fantasy VII Remake", "79,99€", "Final Fantasy VII Remake est le remake de Final Fantasy VII. Le joueur y incarne toujours Cloud, un ancien soldat ayant rejoint le groupe terroriste Avalanche. Ce dernier essaye de déjouer les plans de la Shinra et en vient à se battre avec Sephiroth. Disponible sur Steam, PlayStation 4, PlayStation 5." ],
    ["../../public/assets/img/zelda.jpg", "The Legend of Zelda: Breath of the Wild", "49,99€", "The Legend of Zelda: Breath of the Wild est un jeu d'action-aventure développé par la division Nintendo EPD, assisté par Monolith Soft, et publié par Nintendo le 3 mars 2017 sur Nintendo Switch lors du lancement de la console, ainsi que sur Wii U dont il est le dernier jeu produit par Nintendo. C'est le dix-neuvième jeu de la franchise The Legend of Zelda. Disponible uniquement sur Nintendo Switch."],
    ["../../public/assets/img/DeathStrandingDirectorsCut.jpg", "Death Stranding Director's Cut", "39,99€", "Death Stranding est un jeu vidéo développé par Kojima Productions et édité par Sony Interactive Entertainment, sorti le 8 novembre 2019 sur PlayStation 4 et le 14 juillet 2020 sur Windows. Death Stranding Director's Cut suit Sam Porter Bridges, un livreur dans un monde post-apocalyptique, chargé de reconnecter une société fragmentée après le Death Stranding. Le jeu mêle exploration, survie et narration émouvante, avec des thèmes centrés sur la connexion humaine. Cette version enrichie ajoute de nouvelles missions, outils et contenus pour une expérience optimisée. Disponible sur Steam, PlayStation 5, PlayStation 4."],
    ["../../public/assets/img/darksouls3.jpg", "Dark Souls III", "59,99€", "Dark Souls III, développé par FromSoftware et dirigé par Hidetaka Miyazaki, plonge les joueurs dans un monde sombre et dévasté. Vous incarnez l'Unkindled, un mort-vivant chargé de ramener les Seigneurs des Cendres sur leurs trônes. Entre combats exigeants, exploration oppressante et boss redoutables, le jeu conclut magistralement la saga. Disponible sur Steam, PlayStation 4, Xbox One."],
    ["../../public/assets/img/re2.jpg", "Resident Evil 2", "39,99€", "Resident Evil 2 Remake, développé par Capcom, revisite le classique de 1998 avec des graphismes modernes et une jouabilité repensée. Raccoon City infestée de zombies, vous incarnez Leon S. Kennedy et Claire Redfield, luttant pour survivre et découvrir les secrets derrière l'épidémie. Le jeu mêle horreur, exploration et action dans une ambiance oppressante. Disponible sur Steam, PlayStation 5, PlayStation 4, Nintendo Switch."],
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
