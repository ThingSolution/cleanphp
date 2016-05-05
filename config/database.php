<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 5/5/16
 * Time: 21:41
 */

return array(
    "default"=>"read",

    "read" => array(
        "driver"    => "mysql",
        "host"      => "localhost",
        "db"        => "test",
        "user"      => "root",
        "pass"      => "",
        "port"      => 3306,
        'write'     => "write"
    ),

    "write" => array(
        "driver"    => "mysql",
        "host"      => "localhost",
        "db"        => "test",
        "user"      => "root",
        "pass"      => "",
        "port"      => 3306
    ),
);