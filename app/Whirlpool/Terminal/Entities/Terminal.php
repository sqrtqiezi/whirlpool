<?php

namespace Whirlpool\Terminal\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;
use Whirlpool\Terminal\Presenters\TerminalPresenter;
use Whirlpool\Location\Entities\Location;

class Terminal extends Model implements HasPresenter
{
    /**
     * 省份
     * ** 顺序切勿打乱，键名入库的 **
     */
    const LOCATIONS = [
        1 => '安徽', '北京', '重庆', '福建', '贵州', '广东', '四川', '辽宁', '湖北',
        '江苏', '浙江', '上海', '云南', '山东', '吉林', '湖北', '湖南', '甘肃',
        '青海', '天津', '河北', '贵州', '江西', '辽宁', '宁夏', '新疆', '重庆',
        '西藏', '陕西', '福建', '河南', '广西', '海南', '黑龙江',
    ];
    /**
     * 软删除 mixin
     */
    use SoftDeletes;

    /**
     * 数据库可写
     *
     * @var array
     */
    protected $fillable = ['name', 'location', 'address', 'telephone', 'thumbnail'];

    /**
     * 定义 presenter 类
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return TerminalPresenter::class;
    }

    /**
     * 省份
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->belongsToMany(Location::class);
    }
}
