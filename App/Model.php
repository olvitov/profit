<?php

namespace App;

 class Model {
    const TABLE = '';
    public static function findAll() {



        $db = Db::instance();
        return $db->query(

            'SELECT * FROM ' . static::TABLE,

            self::class

        );
    }
    
}
