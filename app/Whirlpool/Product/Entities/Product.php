<?php

namespace Whirlpool\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\News\Presenters\NewsPresenter;

class Product extends Model implements HasPresenter
{
    /**
     * 抽油烟机
     */
    const TYPE_SMOKE = 1;
    /**
     * 灶具
     */
    const TYPE_STOVE = 2;
    /**
     * 微波炉
     */
    const TYPE_MICROWAVE = 3;
    /**
     * 蒸箱
     */
    const TYPE_STEAM = 4;
    /**
     * 消毒柜
     */
    const TYPE_DISINFECTION = 5;
    /**
     * 洗碗机
     */
    const TYPE_DISH = 6;
    /**
     * 烤箱
     */
    const TYPE_OVEN = 7;
    /**
     * 冰箱
     */
    const TYPE_FRIDGE = 8;
    /**
     * 酒柜
     */
    const TYPE_WINE = 9;
    /**
     * 暖碟
     */
    const TYPE_WARM = 10;
    /**
     * 干衣机
     */
    const TYPE_CLOTHES = 11;
    /**
     * 垃圾处理器
     */
    const TYPE_DUST = 12;

    /**
     * 软删除 mixin
     */
    use SoftDeletes;

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['title', 'date', 'content', 'type'];

    /**
     * 定义 presenter 类
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return NewsPresenter::class;
    }
}
