<?php
include ('../Backend/connexion.php');
$id_demande = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM suivi_dossiers WHERE id_demande = ? ORDER BY date_action ASC");
$stmt->execute([$id_demande]);
$suivis = $stmt->fetchAll();
?>

<h4>Historique du dossier</h4>
<ul class="list-group">
<?php foreach ($suivis as $s): ?>
    <li class="list-group-item">
        <strong><?= $s['date_action'] ?></strong> — <?= htmlspecialchars($s['action']) ?> par <em><?= $s['effectue_par'] ?></em>
    </li>
<?php endforeach; ?>
