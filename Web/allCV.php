<?php
require '../Data/inc_connexion.php';
include '../Classes/CV.php';

$cv = new CV();
$cv->getAllCV($mysqli);