<?php

namespace Whirlpool\Terminal;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Whirlpool\Terminal\Entities\Terminal;

class TerminalRepository implements TerminalRepositoryInterface
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

        $terminal = (new Terminal())->newQuery();

        // 店名/地址/电话搜索
        if (isset($criteria['q']) && $keyword = $criteria['q']) {
            $terminal->where(function ($query) use ($keyword) {
                /** @var Builder $query */
                $query->where('name', 'LIKE', "%{$keyword}%");
                $query->orWhere('address', 'LIKE', "%{$keyword}%");
                $query->orWhere('telephone', 'LIKE', "%{$keyword}%");
            });
        }
        // 省份
        if (isset($criteria['location']) && $criteria['location']) {
            $terminal->where('location', $criteria['location']);
        }
        // 可见性
        if (isset($criteria['visibility'])) {
            switch ($criteria['visibility']) {
                case self::VISIBLE:
                    break;
                case self::INVISIBLE:
                    $terminal->onlyTrashed();
                    break;
                default:
                    break;
            }
        }
        return $terminal->orderBy('id', 'DESC')->paginate(10);
    }

    /**
     * 信息总数
     *
     * @return int
     */
    public function total()
    {
        return Terminal::withTrashed()->count();
    }
}
