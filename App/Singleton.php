<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 17.06.2016
 * Time: 21:09
 */

namespace App;


trait Singleton
{
    
    protected static $instance;

    protected function __construct()
    {


    }

    public static function instance()
    {

    if (null === static::$instance) {

        self::$instance = new static;



}
        return static::$instance;
    }

}
