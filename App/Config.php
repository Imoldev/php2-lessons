<?php


namespace App;


class Config
{
    protected const CONFIG_FILE = '/config/config.php';

    public $data;

    protected static $instance = null;

    public static function instance ()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $this->data = require __DIR__. '/..' . self::CONFIG_FILE;
    }

}