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

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

defined('START') or exit('We couldn\'t process your request right now.');

class FedeeLogger 
{
    private $logger;

    public function __construct() {
        $this->logger = new Logger('fedee');
        $this->logger->pushHandler(new StreamHandler('../storage/logs/fedee.log', Logger::WARNING));
    }

    public function getLogger() {
        return $this->logger;
    }
}