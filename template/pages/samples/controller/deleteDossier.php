<?php

include_once '../racine.php';
include_once RACINE.'/service/DossierService.php';
extract($_GET);

$es = new DossierService();
$es->delete($es->findById($id));

header("location:../etatd.php");


