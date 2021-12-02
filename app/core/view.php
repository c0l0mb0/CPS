<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$path = str_replace('\\', '/', __DIR__);
require_once 'vendor/Autoload.php';
//Twig_Autoloader::register();

class View
{

    private $twig;

    function __construct()
    {
        $loader = new FilesystemLoader('app/views/twig');
        $twig = new Environment($loader, array(
            'cache' => 'cache',
            'auto_reload' => true
        ));
        $this->twig = $twig;
    }


    function generate($content_view, $data = null)
    {
        echo $this->twig->render($content_view, $data);
    }

}