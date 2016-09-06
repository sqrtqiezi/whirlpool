<?php

namespace Whirlpool\News\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\News\Entities\News;

class NewsPresenter extends BasePresenter
{
    /**
     * 新闻分类文字
     *
     * @var array
     */
    public static $typeContent = [
        News::TYPE_COMPANY   => '公司内讯',
        News::TYPE_MEDIA     => '媒体报道',
        News::TYPE_PROMOTION => '促销活动',
    ];

    /**
     * 包装对象
     *
     * @var \Whirlpool\News\Entities\News
     */
    protected $wrappedObject;

    /**
     * NewsPresenter constructor.
     *
     * @param \Whirlpool\News\Entities\News $resource
     */
    public function __constructor(News $resource)
    {
        $this->wrappedObject = $resource;
    }

    /**
     * 标题
     *
     * @return string
     */
    public function title()
    {
        return $this->wrappedObject->title;
    }

    /**
     * 新闻内容
     *
     * @return string
     */
    public function content()
    {
        return $this->wrappedObject->content;
    }

    /**
     * 新闻真实发布日期
     *
     * @return string
     */
    public function created_at()
    {
        /** @var Carbon $createdAt */
        $createdAt = $this->wrappedObject->created_at;

        return $createdAt->toDateString();
    }

    /**
     * 新闻最后修改日期
     *
     * @return string
     */
    public function updated_at()
    {
        /** @var Carbon $updatedAt */
        $updatedAt = $this->wrappedObject->updated_at;

        return $updatedAt->toDateString();
    }

    /**
     * 新闻内容截取摘要
     *
     * @param int $length
     *
     * @return string
     */
    public function description($length = 30)
    {
        /** @var string $content */
        $content = strip_tags($this->wrappedObject->content);

        return Str::substr($content, 0, $length);
    }

    /**
     * 新闻分类
     *
     * @return string
     */
    public function type()
    {
        $type = $this->wrappedObject->type;

        return isset(self::$typeContent[$type]) ? self::$typeContent[$type] : $type;
    }

    /**
     * 上传文件可访问网址
     *
     * @return string
     */
    public function thumbnail_url()
    {
        return $this->wrappedObject->thumbnail
            ? asset($this->wrappedObject->thumbnail)
            : '';
    }
}
