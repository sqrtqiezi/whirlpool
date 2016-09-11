<?php

namespace Whirlpool\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\Product\Presenters\ProductPresenter;

class Product extends Model implements HasPresenter
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
    protected $fillable = [
        'main_heading', 'sub_heading', 'type_id', 'background',
        'feature', 'spec_img_one', 'spec_img_two', 'specification', 'core_tech_title',
        'core_tech_detail', 'detail',
    ];

    protected $casts = [
        'feature' => 'array',
        'specification' => 'array',
        'core_tech_detail' => 'array',
        'detail' => 'array'
    ];

    /**
     * 分类
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }

    /**
     * 定义 presenter 类
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return ProductPresenter::class;
    }
}
