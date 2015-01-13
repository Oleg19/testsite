<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.01.2015
 * Time: 13:57
 */

namespace App\Modules\News\Models;

use T4\Core\Collection;
use T4\Core\Exception;
use T4\Fs\Helpers;
use T4\Http\Uploader;
use T4\Mvc\Application;
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