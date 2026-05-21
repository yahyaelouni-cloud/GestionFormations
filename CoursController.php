<?php
require_once 'models/Inscription.php';

$inscription_id = $_SESSION['inscription_id'] ?? 0;
$inscription    = $inscription_id ? Inscription::getById($inscription_id) : null;

require 'views/cours.php';
?>