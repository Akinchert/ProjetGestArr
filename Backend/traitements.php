<?php
require ('..//Backend/connexion.php');
//require ('..//Backend/traitements.php'); 

$servicenom = $pdo->query('SELECT nom  FROM services');
  
$dmd = $pdo->query('SELECT COUNT(*) as nombre FROM demandes');
$array=$dmd->fetchALL();
$nb=count($array);

if(isset($_POST['submitdmd'])) {
    $numero_suivi = uniqid('DOSSIER-');
    $nom_demandeur = $_POST['nom_demandeur'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';

    $stmt = $pdo->prepare("INSERT INTO demandes (numero_suivi, nom_demandeur, email, service, date_demande, statut) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute (array($numero_suivi, $nom_demandeur, $email, $service, $date_demande, $statut));
   
    $confirmation = "Votre demande a été soumise. Numéro de suivi :<strong>$numero_suivi</strong>";
    echo "Demande soumise avec succès.";
}

$info = '';
if(isset($_POST['submitsv'])) {
    $numero = $_POST['numero'];
    $stmt = $pdo->prepare("SELECT * FROM demandes WHERE numero_suivi = ?");
    $stmt->execute([$numero]);
    $demande = $stmt->fetch();

    if ($demande) {
        //header("Location: ..//Frontend/alert.php");
        $info = "Statut actuel de votre demande : <strong>".htmlspecialchars($demande['statut'])."</strong>";
    } else {
        $info = "<span class='text-danger'>Numéro de suivi introuvable.</span>";
    }
}

if(isset($_POST['submitrcm'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $type = $_POST['type_reclamation'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO reclamations (nom_citoyen, email, type_reclamation, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $type, $message]);

    $confirmationn = "Votre message a été soumis avec succès.";
}

if(isset($_POST['submitR'])) {
    $numero_suivi = uniqid('Reg.Arr1PN.-');
    $nom_demandeur = $_POST['nom_demandeur'];
    $telephone = $_POST['telephone'];
    $entite = $_POST['entite'];
    $service = $_POST['service'];
    $date_demande = date('Y-m-d');
    $statut = 'En attente';

    $stmt = $pdo->prepare("INSERT INTO demandes (numero_suivi, nom_demandeur, email, service, date_demande, statut) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute (array($numero_suivi, $nom_demandeur, $email, $service, $date_demande, $statut));
   
    $confirmation = "Votre demande a été soumise. Numéro de suivi :<strong>$numero_suivi</strong>";
    echo "Demande soumise avec succès.";
}

// if (isset($_POST['submitAj'])) {
//     $nom = htmlspecialchars($_POST['nom']);
//     $description = htmlspecialchars($_POST['description']);
//     $prix = $_POST['prix'];

//     $stmt = $pdo->prepare("INSERT INTO services (nom, description, prix) VALUES (?, ?, ?)");
//     if ($stmt->execute([$nom, $description, $prix])) {
//         header('Location: ../Admin/dashboard.php');
//         exit();
//     } else {
//         $message = "Erreur lors de l'ajout du service.";
//     }
// }

// $message = '';
// $id = $_GET['id'] ?? 0;

// if ($id) {
//     $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
//     $stmt->execute([$id]);
//     $service = $stmt->fetch();

//     if (!$service) {
//         header('Location: services.php');
//         exit();
//     }

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $nom = htmlspecialchars($_POST['nom']);
//         $description = htmlspecialchars($_POST['description']);
//         $prix = htmlspecialchars ($_POST['prix']);

//         $stmt = $pdo->prepare("UPDATE services SET nom = ?, description = ?, prix = ? WHERE id = ?");
//         if ($stmt->execute([$nom, $description, $prix, $id])) {
//             header('Location: services.php');
//             exit();
//         } else {
//             $message = "Erreur lors de la modification du service.";
//         }
//     }
// } else {
//     header('Location: services.php');
//     exit();
// }

$stmt = $pdo->query("SELECT * FROM reclamations ORDER BY date_soumission DESC");
$reclamations = $stmt->fetchAll();
?>

