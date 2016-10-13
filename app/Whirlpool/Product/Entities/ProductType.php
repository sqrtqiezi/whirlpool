<?php

namespace Whirlpool\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\Product\Presenters\ProductTypePresenter;

class ProductType extends Model implements HasPresenter
{
    use SoftDeletes;

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['name', 'attributes', 'order'];

    /**
     * 类型转换
     *
     * @var array
     */
    protected $casts = [
        'attributes' => 'array',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getDefaultProductType() {
        return self::query()->first();
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return ProductTypePresenter::class;
    }
}
