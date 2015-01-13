<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.01.2015
 * Time: 13:57
 */

namespace App\Modules\News\Models;


use T4\Orm\Model;

class Author
    extends Model
{
    static protected $shema = [
        'table' => 'authors',
        'columns' => [
            'author' => [
                'type' => 'string',
            ],
        ]
    ];
    static protected  $extensions = ['tree'];

}