<?php
include('..//Backend/connexion.php');
$info = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    $stmt = $pdo->prepare("SELECT * FROM demandes WHERE numero_suivi = ?");
    $stmt->execute([$numero]);
    $demande = $stmt->fetch();

    if ($demande) {
        $info = "Statut actuel de votre demande : <strong>" . htmlspecialchars($demande['statut']) . "</strong>";
    } else {
        $info = "<span class='text-danger'>Numéro de suivi introuvable.</span>";
    }
}
?>


<div class="container mt-4">
    <h2>Suivi de dossier</h2>
    <form method="post">
        <input type="text" name="numero" class="form-control mb-2" placeholder="Numéro de suivi" required>
        <button type="submit" class="btn btn-info">Suivre</button>
    </form>
    <div class="mt-3"><?= $info ?></div>
</div>
