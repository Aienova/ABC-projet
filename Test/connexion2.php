        <section id="inscription">
    <h2>Inscription</h2>
    <form action="http://localhost/abc-project/aie-tv/inscription.php" method="post">
        <div>
            <label for="user_name">Nom d'utilisateur (3-20 caractères):</label><br>
            <input type="text" id="user_name" name="user_name" required minlength="3" maxlength="20">
        </div>
        
        <div>
            <label for="user_pass">Mot de passe (6 caractères minimum):</label><br>
            <input type="password" id="user_pass" name="user_pass" required minlength="6">
        </div>
        
        <div>
            <label for="confirm_pass">Confirmer le mot de passe:</label><br>
            <input type="password" id="confirm_pass" name="confirm_pass" required>
        </div>
        
        <button type="submit">S'inscrire</button>
    </form>
</section>
