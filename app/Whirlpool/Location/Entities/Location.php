<?php

namespace Whirlpool\Location\Entities;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['name'];
}
