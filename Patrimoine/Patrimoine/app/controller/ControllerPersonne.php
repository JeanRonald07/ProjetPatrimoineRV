
<!-- ----- debut ControllerPersonne -->
<?php
require_once '../model/ModelPersonne.php';

class ControllerPersonne {

    // Affiche le formulaire de login
    public static function personneLogin() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/login/login.php';
        require ($vue);
    }
    
    // Affiche le formulaire d'inscription
    public static function personneSignUp() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/login/signup.php';
        require ($vue);
    }

    public static function personneLogout() {
        session_start();
        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        require ($vue);
        exit();
    }

    // --- Liste des banques
    public static function personneReadAll() {
        $results = ModelPersonne::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/login/viewAll.php';
        if (DEBUG)
            echo ("ControllerPersonne : personneReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau vin.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function personneInscription() {
        $nom = htmlspecialchars($_GET['nom']);
        $prenom = htmlspecialchars($_GET['prenom']);
        $login = htmlspecialchars($_GET['login']);
        $pwd = htmlspecialchars($_GET['pwd']);
        // ajouter une validation des informations du formulaire
        $results = ModelPersonne::getOneLogin(htmlspecialchars($login));
        include 'config.php';
        if ($results ) {
            $error = "Login already in use. choose another";
            $vue = $root . '/app/view/login/signup.php';
            require ($vue);
        } else { 
            $user = ModelPersonne::insert($nom, $prenom, ModelPersonne::CLIENT, $login, $pwd);
            $vue = $root . '/app/view/login/signup.php';
            require ($vue);
        }
    }
    
     public static function personneConnection() {
        session_start();
        $pwd = htmlspecialchars($_GET['pwd']);
        // ajouter une validation des informations du formulaire
        $results = ModelPersonne::getOneLogin(htmlspecialchars($_GET['login']));
        include 'config.php';
        
        if ($results && $pwd == $results->getPassword()) {

            $_SESSION["login"] = $results->getLogin();
            $_SESSION["nom"] = $results->getNom();
            $_SESSION["prenom"] = $results->getPrenom();
            $_SESSION["statut"] = $results->getStatut();
            // ----- Construction chemin de la vue

            $vue = $root . '/app/view/viewPatrimoineAccueil.php';
            require ($vue);
        } else { 
            $error = "Invalid username or password";
            $vue = $root . '/app/view/login/login.php';
            require ($vue);
        }
    }
}
?>
<!-- ----- fin ControllerPersonne -->


