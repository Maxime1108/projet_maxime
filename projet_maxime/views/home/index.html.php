
<body>

    <?php include 'includes/header.php'; ?>

    <div class="categories">
        <?php
     
        $categories = [
            ["title" => "Jeux Vidéo", "image" => "public/assets/img/animalcrossing.avif", "link" => "views/jeux_videos/jeux_video_page.html.php"],
            ["title" => "Mangas", "image" => "public/assets/img/dandadan1.jpg", "link" => "views/mangas/manga_page.html.php"],
            ["title" => "Accessoires", "image" => "public/assets/img/toriiphoto (1).jpg", "link" => "views/accessoires/accessoires_page.html.php"],
            ["title" => "Vêtements Traditionnels", "image" => "public/assets/img/yukata.jpg", "link" => "views/vetements_traditionnels/vetements_traditionnels.html.php"]
        ];

       
        foreach ($categories as $category) {
            echo '
            <div class="category-card">
                <a href="' . $category["link"] . '">
                    <img src="' . $category["image"] . '" alt="' . $category["title"] . '">
                    <h3>' . $category["title"] . '</h3>
                </a>
            </div>';
        }
        ?>
    </div>

<?php include 'includes/footer.php'; ?>

</body>