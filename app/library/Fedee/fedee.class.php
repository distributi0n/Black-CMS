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

class Fedee 
{
    private static $librarys = array();
    private static $classes = array();

    public static function get($library)
    {
        if (isset(self::$librarys[$library]) && isset(self::$classes[$library])) {
            return self::$classes[$library];
        }

        $fixedLibrary = str_replace('.', '/', $library);
		$file = ROOT . '/app/library/fedee/' . $fixedLibrary . '.class.php';

        self::$librarys[$library] = $library;

        require($file);
        
        $delcaredClasses = get_declared_classes();
        $workingClass = end($delcaredClasses);

        self::$classes[$library] = new $workingClass();
        return self::$classes[$library];
    }
}