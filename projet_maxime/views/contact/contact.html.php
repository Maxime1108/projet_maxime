<h1>Page de contact</h1>

<form action="<?= addLink('contact', 'contact') ?>" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" required>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <label for="message">Message</label>
    <textarea name="message" id="message" required></textarea>
    <button type="submit">Envoyer</button>
</form>