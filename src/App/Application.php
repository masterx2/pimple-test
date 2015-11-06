<?php
namespace App;

use App\Controllers\dataController;
use Pimple\Container;

class Application extends Container {
	public function run() {

        // Конфиг для краткости простой массив
        $this['config'] = [
            "mongo" => [
                "host" => "localhost",
                "port" => 27017,
                "dbname" => "test"
            ]
        ];

        // Регистрация базы
        $this['db'] = function($c) {
            return new Mongo($c['config']['mongo']);
        };

        // Регистрация контроллера
        $this['data'] = function($c) {
            return new dataController($c);
        };


        $id = $this['data']->storeData(["testData" => 123456]);
        var_dump($this['data']->getDataById($id));
	}
}