
<!-- ----- début viewInserted -->
<?php
require_once '../../outil/session_check.php';
require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
checkSession();
checkAdmin();

?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
    include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3 class='text-danger'>Résultat de l'insertion d'une nouvelle banque </h3>");
     echo("<ul>");
     echo ("<li>label = " . $_GET['label'] . "</li>");
     echo ("<li>pays = " . $_GET['pays'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3 class='text-danger'>Problème d'insertion de la nouvelle banque</h3>");
     echo ("id = " . $_GET['label']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentPatrimoineFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    
