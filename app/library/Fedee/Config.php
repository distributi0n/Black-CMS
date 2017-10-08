<?php 

/**
 * Fedee CMS, a simple content management system.
 * 
 * @author distributi0n <distributi0n@riseup.net>
 * @version 0.0.1
 * @package FedeeCms_Master
 *
 */

namespace App\Fedee;

defined('START') or exit('We couldn\'t process your request right now.');

class Config 
{
    private $config = array();

    public function __construct() {
        $this->set('core:monolog.log_name', 'fedee');
        $this->set('core:monolog.log_directory', '/storage/logging');
        $this->set('core:twig.caching.enabled', false);
        $this->set('core:twig.cache_directory', '/storage/cache/templates/');
        $this->set('core:template.directory', '/resources/templates/');
        $this->set('core:template.folder', 'test');
        $this->set('core:template.full_directory', $this->config['core:template.directory'] . $this->config['core:template.folder']);
    }

    public function get($key){
        if (in_array($key, $this->config)) {
            return $this->config[$key];
        }

        return '';
    }

    public function set($key, $value) {
        $this->config[$key] = $value;
    }
}