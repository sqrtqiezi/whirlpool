<?php

namespace Whirlpool\News;

use Illuminate\Support\Collection;
use Whirlpool\Contracts\RepositoryInterface;
use Whirlpool\News\Entities\News;

class NewsRepository implements NewsRepositoryInterface
{

    /**
     *
     * 筛选列表结果
     *
     * @param array $criteria
     *
     * @return Collection
     */
    public function filter(array $criteria = [], $pageSize = 10)
    {

        $news = (new News())->newQuery();

        // 标题搜索
        if (isset($criteria['q']) && $keyword = $criteria['q']) {
            $news->where('title', 'LIKE', "%{$keyword}%");
        }
        // 内容类别
        if (isset($criteria['type']) && $criteria['type']) {
            $news->where('type', $criteria['type']);
        }
        // 可见性
        if (isset($criteria['visibility'])) {
            switch ($criteria['visibility']) {
                case RepositoryInterface::VISIBLE:
                    break;
                case RepositoryInterface::INVISIBLE:
                    $news->onlyTrashed();
                    break;
                default:
                    break;
            }
        }
        return $news->orderBy('is_stick', 'DESC')->orderBy('id', 'DESC')->paginate($pageSize);
    }

    /**
     * 信息总数
     *
     * @return int
     */
    public function total()
    {
        return News::withTrashed()->count();
    }
}
