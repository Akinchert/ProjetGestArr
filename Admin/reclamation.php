<?php
include('../Backend/connexion.php');


$stmt = $pdo->query("SELECT * FROM reclamations ORDER BY date_soumission DESC");
$reclamations = $stmt->fetchAll();
?>

<div class="container mt-4">
    <h2>Réclamations et doléances</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Type</th>
                <th>Message</th>
                <th>Date</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reclamations as $r): ?>
                <tr>
                    <td><?= htmlspecialchars($r['nom_citoyen']) ?></td>
                    <td><?= htmlspecialchars($r['email']) ?></td>
                    <td><?= $r['type_reclamation'] ?></td>
                    <td><?= nl2br(htmlspecialchars($r['message'])) ?></td>
                    <td><?= $r['date_soumission'] ?></td>
                    <td><?= $r['statut'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

