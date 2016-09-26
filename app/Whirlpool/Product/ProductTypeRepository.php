<?php

namespace Whirlpool\Product;

use Illuminate\Support\Collection;
use Whirlpool\Contracts\RepositoryInterface;
use Whirlpool\Product\Entities\ProductType;

class ProductTypeRepository implements RepositoryInterface
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

        $type = (new ProductType())->newQuery();
        // 可见性
        if (isset($criteria['visibility'])) {
            switch ($criteria['visibility']) {
                case self::VISIBLE:
                    break;
                case self::INVISIBLE:
                    $type->onlyTrashed();
                    break;
                default:
                    goto ALL_VISIBILITY;
            }
        } else {
            ALL_VISIBILITY:
            $type->withTrashed();
        }

        return $type->orderBy('id')->paginate(12);
    }

    /**
     * 信息总数
     *
     * @return int
     */
    public function total()
    {
        return ProductType::withTrashed()->count();
    }
}
