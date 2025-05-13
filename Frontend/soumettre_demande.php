<?php
include('..//Backend/connexion.php');
require ('..//Backend/traitements.php');   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_demandeur = $_POST['nom_demandeur'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';

    $stmt =  $pdo->prepare("INSERT INTO demandes (nom_demandeur, service, date_demande, statut) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom_demandeur, $service, $date_demande, $statut);
    $stmt->execute();

    echo "Demande soumise avec succès.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soumettre une Demande</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Soumettre une Demande</h2>
    <form method="POST" action="">
        <label for="nom_demandeur">Nom :</label><br>
        <input type="text" name="nom_demandeur" required><br><br>

        <label for="service">Service demandé :</label><br>       
         <select class="form-select" id="validationDefault04" name="code" >
                              <option value=""selected></option>
                    <?php  while($list_traitement = $servicenom->fetch()) :?>
            
                    <option value="<?= $list_traitement['nom'] ?>"><?= $list_traitement['nom'] ?></option>
                   <?php endwhile ?>
                  </select>
           
        <input type="submit" value="Soumettre la demande">
    </form>
</body>
</html>
