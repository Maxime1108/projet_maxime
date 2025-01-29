<?php
$mangas = [
    ["../../public/assets/img/demonslayer.jpg", "Demon Slayer - Intégrale", "167,67€", "Une histoire captivante dans un monde envahi par des démons. Un jour, le jeune Tanjiro découvre que sa famille s'est fait massacrer et que la seule survivante, sa sœur Nezuko, est devenue un démon. Ainsi, commence la dure tâche de Tanjiro, celle de combattre les démons et de faire redevenir sa sœur humaine. (Intégrale disponible en coffret deluxe.)"],
    ["../../public/assets/img/yourname.jpg", "Your Name - Intégrale", "21,95€", "Découvrez l'histoire magique et émouvante de Taki et Mitsuha, un chef-d'œuvre de Makoto Shinkai. Mitsuha, adolescente coincée dans une famille traditionnelle, rêve de quitter ses montagnes natales pour découvrir la vie trépidante de Tokyo. Elle est loin d'imaginer pouvoir vivre l'aventure urbaine dans la peau de... Taki, un jeune lycéen vivant à Tokyo. À travers ses rêves, Mitsuha se voit littéralement propulsée dans la vie du jeune garçon. Quel mystère se cache derrière ces rêves étranges qui unissent deux destinées que tout oppose et qui ne se sont jamais rencontrées ?"],
    ["../../public/assets/img/yourlieinapril.jpg", "Your Lie in April - Intégrale", "65,00€", "Une histoire poignante d'amour et de musique qui changera votre vie. Your Lie in April suit Kōsei Arima, un jeune pianiste prodige qui abandonne la musique après la mort de sa mère. Sa vie change lorsqu'il rencontre Kaori Miyazono, une violoniste pleine de vie qui l'encourage à affronter son passé et à retrouver sa passion. Mais Kaori cache un secret qui bouleversera tout... Ce récit mêle musique, amour et émotions intenses."],
    ["../../public/assets/img/dandadan.jpg", "DanDaDan - Intégrale", "96,96€", "Un manga unique mêlant science-fiction, action et humour décalé. Dandadan raconte l'histoire de Momo et Okarun, deux lycéens aux croyances opposées : l'un croit aux extraterrestres, l'autre aux fantômes. Après un pari, ils se retrouvent confrontés à des créatures surnaturelles et se lancent dans des aventures pleines d'action et d'humour."],
    ["../../public/assets/img/asilentvoice.jpg", "A Silent Voice - Intégrale", "46,20€", "Un récit bouleversant sur le pardon, l'acceptation et la rédemption. Nishimiya est une élève douce mais qui elle est harcelée par Ishida, car elle est sourde. Dénoncé, le garçon est à son tour rejeté par ses camarades. Des années plus tard, il apprend la langue des signes et part à la recherche de la jeune fille."],
    ["../../public/assets/img/horimiya.jpg", "Horimiya - Intégrale", "70,00€", "Une comédie romantique douce et sincère sur l'amour et l'amitié.  Hori et Miyamura, deux lycéens que tout semble séparer. Hori est populaire et sociale, tandis que Miyamura est discret et réservé. Mais ils découvrent des facettes inattendues de l'autre lorsqu'ils se rencontrent hors de l'école, formant ainsi une relation touchante et pleine de complicité."],
];

$id = $_GET['id'] ?? null;

if ($id === null || !isset($mangas[$id])) {
    echo "Manga introuvable !";
    exit;
}

$manga = $mangas[$id];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $manga[1]; ?></title>
    <link rel="stylesheet" href="../../public/assets/css/style-manga-detail.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $manga[1]; ?></h1>
        <img src="<?php echo $manga[0]; ?>" alt="<?php echo $manga[1]; ?>">
        <p><span>Prix :</span> <?php echo $manga[2]; ?></p>
        <p><span>Description :</span> <?php echo $manga[3]; ?></p>
        <a href="manga_page.html.php" class="return-link">Retour à la liste des mangas</a>
    </div>
</body>
</html>