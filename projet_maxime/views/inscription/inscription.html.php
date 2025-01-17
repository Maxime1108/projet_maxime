<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Matsuri</title>
    <link rel="stylesheet" href="../../public/assets/css/style-inscription.css">
</head>
<body>
    <header>
        <h1>Inscription</h1>
    </header>
    <main>
        <div class="form-container">
            <form action="inscription.php" method="POST">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmez le mot de passe :</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
    </main>

<?php include '../../includes/footer.php'; ?>

</body>
</html>
