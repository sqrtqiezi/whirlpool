<?php

namespace Whirlpool\Config\Entities;

use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\Config\Presenters\ConfigPresenter;

class Config extends Model implements HasPresenter
{

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['content'];

    /**
     * 类型转换
     *
     * @var array
     */
    protected $casts = [
        'content' => 'array',
    ];

    /**
     * 定义 presenter 类
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return ConfigPresenter::class;
    }
}
