<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 13.06.2016
 * Time: 17:02
 */

namespace App\Models;


class User
{
    public $email;
    public $user;

    public static function findAll() {



        $db = new Db();
        return $db->query(

            'SELECT * FROM users',

            'App\Models\User'
            
        );
    }

}
