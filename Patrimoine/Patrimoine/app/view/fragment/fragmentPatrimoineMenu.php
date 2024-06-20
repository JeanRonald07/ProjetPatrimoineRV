
<!-- ----- début fragmentCaveMenu -->
<?php
require_once '../model/ModelPersonne.php';
?>

<nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="router1.php?action=patrimoineAccueil">Fotso-Fotso</a>
        <?php if (isset($_SESSION['login'])): ?>
            <p style="color: white"><?php
                echo htmlspecialchars($_SESSION["nom"]);
                echo '  ';
                echo htmlspecialchars($_SESSION["prenom"]);
                ?></p>
            <p style="color: white"><?php
                if ($_SESSION["statut"] == ModelPersonne::ADMINISTRATEUR) {
                    echo 'Administratuer';
                } else {
                    echo 'Client';
                }
                ?></p>        
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php if (isset($_SESSION['login'])): ?>
                    <?php if ($_SESSION["statut"] == ModelPersonne::ADMINISTRATEUR): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">BANQUE</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="router1.php?action=banqueReadAll">Liste des banques</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=banqueCreate">Ajout d'une banque</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=banqueCreate">Liste des comptes d'une banque</a></li> 
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clients</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="router1.php?action=clientReadAll">Liste des clients</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=adminReadAll">Liste des administrateurs</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=compteReadAll">Liste des comptes</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=residenceReadAll">Liste des résidences</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes comptes bancaires</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="router1.php?action=banqueReadAll">Liste de mes comptes</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=banqueCreate">Ajouter un nouveau compte</a></li>
                                <li><a class="dropdown-item" href="router1.php?action=banqueReadLabel">Transfert inter-comptes</a></li> 
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ce Connecter</a>
                    <ul class="dropdown-menu">
                        <?php if (!isset($_SESSION['login'])): ?>
                            <li><a class="dropdown-item" href="router1.php?action=personneLogin">Login</a></li>
                            <li><a class="dropdown-item" href="router1.php?action=personneSignUp">Sincrire</a></li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="router1.php?action=personneLogout">deconnection</a></li> 
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovation</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="router1.php?action=innovationPage">Statistics</a></li>
                    </ul>
                </li>

                <!--        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTEUR</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?">?</a></li>
                          </ul>
                        </li>-->
            </ul>
        </div>
    </div>
</nav> 


<!-- ----- fin fragmentCaveMenu -->

