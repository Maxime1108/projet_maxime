<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT . 'public/assets/css/style-' . $categorie . '.css' ?>">
    <link rel="stylesheet" href="<?= ROOT . 'public/assets/css/style-a-propos.css' ?>">
    <link rel="stylesheet" href="<?= ROOT . 'public/assets/css/style.css' ?>">

    <title>Document</title>
</head>

<body>
    <header>
        <h1>Matsuri</h1>
        <nav>
            <a href="<?= addLink('categories', 'index') ?>">Catégories</a>
            <a href="#">À propos</a>
            <a href="<?= addLink('contact', 'index') ?>">Contact</a>
        </nav>
    </header>