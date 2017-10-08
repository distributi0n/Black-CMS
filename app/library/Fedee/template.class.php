<?php 

/**
 * Fedee CMS, a simple content management system.
 * 
 * @author distributi0n <distributi0n@riseup.net>
 * @version 0.0.1
 * @package FedeeCms_Master
 *
 */

namespace Fedee\Fedee;

defined('START') or exit('We couldn\'t process your request right now.');

class Template 
{
    private $twig;

    public function __construct() {
        $loader = new \Twig_Loader_Filesystem('../resources/templates/test');

        $this->twig = new \Twig_Environment($loader, array(
            'cache' => '../storage/cache/templates',
        ));
    }

    public function render($template, array $parameters = array()) {
        echo $this->twig->render($template, $parameters);
    }
}