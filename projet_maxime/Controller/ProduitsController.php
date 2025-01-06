<?php

namespace Controller;

use Model\Repository\ProduitsRepository;
use Services\Protect;

class ProduitsController extends BaseController
{
    public function index()
    {
        $categorie = $_REQUEST['categorie'];
        $produitRepository = new ProduitsRepository();
        $produits = $produitRepository->findProduitsByCategories($categorie);

        if ($produits) {
            $produits = Protect::protectHtMLSpecialChars($produits);
        }

        $this->render('produits/index.html.php', [
            'produits' => $produits,
            'categorie' => $categorie
        ]);
    }
}