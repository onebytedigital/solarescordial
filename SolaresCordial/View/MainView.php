<?php

namespace SolaresCordial\View;

class MainView
{
    public static function render($filenma)
    {
        if (isset($_SESSION['usuarioLogado'])) {
            include ('pages/partials/header-admin.php');
            include ('pages/'.$filenma.'.php');
            include ('pages/partials/footer.php.php');
        } else {
            include ('pages/partials/header.php');
            include ('pages/'.$filenma.'.php');
            include ('pages/partials/footer.php');
        }
    }
}