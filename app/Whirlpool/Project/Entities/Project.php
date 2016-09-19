<?php

namespace Whirlpool\Project\Entities;

/**
 * I pledge that this program represents my own
 * program code.
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\Project\Presenters\ProjectPresenter;

class Project extends Model implements HasPresenter
{
    /**
     * 软删除 mixin
     */
    use SoftDeletes;

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['title', 'date', 'description', 'thumbnail'];

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
        return ProjectPresenter::class;
    }
}