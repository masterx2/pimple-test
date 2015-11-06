<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 06.11.15
 * Time: 1:50
 */

namespace App;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class Mongo {
    /**
     * Mongo constructor.
     */
    public function __construct($config) {
        $this->connection = new \MongoClient('mongodb://'.$config['host'].':'.$config['port']);
        $this->db = $this->connection->selectDB($config['dbname']);
    }
}