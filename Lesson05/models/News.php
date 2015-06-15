<?php
namespace Application\Lesson05\models;

use Application\Lesson05\classes\AbstractModel;
/**
 * Class NewsModel
 * @property $id 
 * @property $title
 * @property $text
 * @property $date
 */

class News extends AbstractModel
{
    protected static $table = 'news';
} 