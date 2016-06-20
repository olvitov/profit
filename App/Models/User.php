<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 13.06.2016
 * Time: 17:02
 */

namespace App\Models;


use App\Model;

class User extends Model
implements HasEmail
{
   const TABLE = 'users';

    public $email;
    public $name;
    
    public function getEmail() {
        
        return $this->email;
    }

   

}
