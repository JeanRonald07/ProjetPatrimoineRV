
<!-- ----- début viewAll -->
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
        
        <h2 class="text-danger">Liste des banques</h2>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr class = "table-success">
                    <th scope = "col">label</th>
                    <th scope = "col">pays</th>
                </tr>
            </thead>
            <tbody>
                <?php
                          
                foreach ($results as $element) {
                    printf("<tr><td>%s</td><td>%s</td></tr>",
                            $element->getLabel(), $element->getPays());
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

    <!-- ----- fin viewAll -->




