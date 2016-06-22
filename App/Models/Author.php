<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.06.2016
 * Time: 10:53
 */

namespace App\Models;

use App\Model;

class Author
    extends Model

{
    const TABLE = 'authors';

    public $name;

}
