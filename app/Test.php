<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Test extends Model
{
    protected $collection = 'keys';
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';
    protected $dates = ['birthday'];
    public $timestamps = false;
}
