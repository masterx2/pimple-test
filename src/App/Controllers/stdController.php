<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 06.11.15
 * Time: 2:26
 */

namespace App\Controllers;


class stdController {

    /** @var /App/Application */
    public $app;

    /**
     * stdController constructor.
     */
    public function __construct($app) {
        $this->app = $app;
        $this->db = $app['db']->db;
    }
}