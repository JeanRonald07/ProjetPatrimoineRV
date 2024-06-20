<?php
require_once '../model/ModelPersonne.php';
function checkSession() {
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: router1.php?action=personneLogin');
        exit();
    }
}
function checkAdmin() {
    if ($_SESSION["statut"] == ModelPersonne::CLIENT){
        header('Location: router1.php?action=personneLogin');
        exit();
    }
}
