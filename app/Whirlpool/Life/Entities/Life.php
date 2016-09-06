<?php

namespace Whirlpool\Life\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\Life\Presenters\LifePresenter;

class Life extends Model implements HasPresenter
{
    /**
     * 厨电创想人
     */
    const TYPE_PEOPLE = 1;
    /**
     * “懂”厨电
     */
    const TYPE_APPLIANCE = 2;
    /**
     * “品”美味
     */
    const TYPE_DELICIOUS = 4;
    /**
     * “绘”厨房
     */
    const TYPE_KITCHEN = 8;
    /**
     * 软删除 mixin
     */
    use SoftDeletes;

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'type', 'thumbnail'];

    /**
     * 定义 presenter 类
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return LifePresenter::class;
    }
}
