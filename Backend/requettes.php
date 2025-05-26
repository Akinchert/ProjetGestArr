<?php
require ('..//Backend/connexion.php');

$servicenom = $pdo->query('SELECT nom  FROM services');