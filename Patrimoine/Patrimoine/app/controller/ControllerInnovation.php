
<!-- ----- debut ControllerInnovation -->
<?php
require_once '../model/ModelBanque.php';
require_once '../model/ModelPersonne.php';

class ControllerInnovation {


    // Affiche la page dinnovation
    public static function innovationPage() {
        // ----- Construction chemin de la vue
        $listeBanque = ModelBanque::getAll();
        $ListePersonne = ModelPersonne::getAll();
        $nombreBanque = count($listeBanque);
        $nombrePersonne = count($ListePersonne);
        include 'config.php';
        $vue = $root . '/app/view/stats/statistics.php';
        require ($vue);
    }
    

   
}
?>
<!-- ----- fin ControllerInnovation -->


