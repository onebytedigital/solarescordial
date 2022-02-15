<?php

namespace SolaresCordial\Utils;

class Utils
{
    public static function logout()
    {
        if (isset($_GET['logout'])) {
            session_destroy();
            self::redirect('admin');
        }
    }

    public static function redirect($url)
    {
        echo '<script>window.location.href="'.$url.'"</script>';
    }
}