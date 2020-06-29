<?php

namespace App\Classes;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    public function __construct()
    {

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => $_SERVER['DB_DRIVER'],
            'host'      => $_SERVER['DB_HOST'],
            'database'  => $_SERVER['DB_NAME'],
            'username'  => $_SERVER['DB_USER'],
            'password'  => $_SERVER['DB_PASS'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
   
}
