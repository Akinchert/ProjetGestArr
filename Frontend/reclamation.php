<?php
include('../Backend/connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $type = $_POST['type_reclamation'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO reclamations (nom_citoyen, email, type_reclamation, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $type, $message]);

    $confirmation = "Votre message a été soumis avec succès.";
}
?>


<div class="container mt-4">
    <h2>Formulaire de doléance, suggestion ou plainte</h2>
    <?php if (isset($confirmation)) echo "<div class='alert alert-success'>$confirmation</div>"; ?>
    <form method="post">
        <input type="text" name="nom" class="form-control mb-2" placeholder="Votre nom complet" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Votre email" required>
        <select name="type_reclamation" class="form-control mb-2" required>
            <option value="">-- Choisissez un type --</option>
            <option>Doléance</option>
            <option>Suggestion</option>
            <option>Plaintes</option>
        </select>
        <textarea name="message" class="form-control mb-2" rows="5" placeholder="Votre message..." required></textarea>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
