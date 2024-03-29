<?php

namespace Whirlpool\Life;

use Illuminate\Support\Collection;
use Whirlpool\Contracts\RepositoryInterface;
use Whirlpool\Life\Entities\Life;

class LifeRepository implements LifeRepositoryInterface
{
    /**
     *
     * 筛选列表结果
     *
     * @param array $criteria
     *
     * @return Collection
     */
    public function filter(array $criteria = [])
    {

        $news = (new Life())->newQuery();

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
        return $news->orderBy('id', 'DESC')->paginate(10);
    }

    /**
     * 信息总数
     *
     * @return int
     */
    public function total()
    {
        return Life::withTrashed()->count();
    }
}
