<?php
require_once 'models/Formation.php';

$niveau    = $_GET['niveau'] ?? '';
$formations = $niveau
    ? Formation::getByNiveau($niveau)
    : Formation::getAll();

require 'views/formations.php';
?>