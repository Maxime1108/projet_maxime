<?php

namespace Model\Repository;

class ProduitsRepository extends BaseRepository
{
    public function findProduitsByCategories(string $categorie): array
    {
        $pdo = $this->connexion;

        $sql = "SELECT * FROM produit WHERE categorie = :categorie";

        $request = $pdo->prepare($sql);
        $request->bindParam(':categorie', $categorie, \PDO::PARAM_STR);

        if ($request->execute()) {
            return $request->fetchAll(\PDO::FETCH_CLASS, 'Model\Entity\Produit');
        } else {
            return [];
        }

    }
}