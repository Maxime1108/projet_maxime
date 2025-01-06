<h1><?= $categorie ?></h1>

<?php
if (empty($produits)) {
    echo "Aucun produit dans cette catégorie";
}
foreach ($produits as $produit) {
    ?>
    <div>
        <h2><?= $produit->getNom() ?></h2>
        <p><?= $produit->getDescription() ?></p>
        <p><?= $produit->getPrix() ?> €</p>
        <img src="<?= ROOT . 'public/assets/img/' . $produit->getImage() ?>" alt="<?= $produit->getNom() ?>">
    </div>
    <?php
}
?>