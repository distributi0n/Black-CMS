<?php

/**
 * Black CMS, a simple content management system.
 * 
 * @author distributi0n <distributi0n@riseup.net>
 * @version 0.0.1
 * @package BlackCms_Master
 *
 */

define("START", microtime(true));
define("ROOT", realpath(__DIR__.'/../'));

$loader = new Twig_Loader_Filesystem('../resources/templates/test');

$twig = new Twig_Environment($loader, array(
    'cache' => '../storage/cache/templates',
));

echo $twig->render('index.html', array('name' => 'distributi0n'));

printf("\n<!-- Page was rendered in %.6f seconds -->", (microtime(true) - START));
