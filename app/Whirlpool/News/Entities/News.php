<?php

namespace Whirlpool\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\News\Presenters\NewsPresenter;

class News extends Model implements HasPresenter
{
    /**
     * 公司内讯
     */
    const TYPE_COMPANY   = 1;
    /**
     * 媒体报道
     */
    const TYPE_MEDIA     = 2;
    /**
     * 促销活动
     */
    const TYPE_PROMOTION = 4;

    /**
     * 软删除 mixin
     */
    use SoftDeletes;

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['title', 'date', 'content', 'type', 'thumbnail'];

    /**
     * 类型转换
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
    ];

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
