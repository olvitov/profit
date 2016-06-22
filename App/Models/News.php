<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.06.2016
 * Time: 21:18
 */

namespace App\Models;

use App\Model;


class News
    extends Model

{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

}
