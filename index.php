<?php

    use App\Controllers\MainController;

    define('DIRBASE', __DIR__);
    define('DIR_APP', DIRBASE."/app");
    define('DIR_PUBLIC', DIRBASE."/public");

    require_once DIRBASE.'/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();

?>