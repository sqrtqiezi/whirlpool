<?php

namespace Whirlpool\Product;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Whirlpool\Contracts\RepositoryInterface;
use Whirlpool\Product\Entities\Product;

class ProductRepository implements ProductRepositoryInterface
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

        $news = (new Product())->newQuery();

        // 标题搜索
        if (isset($criteria['q']) && $keyword = $criteria['q']) {
            $news->where('main_heading', 'LIKE', "%{$keyword}%");
        }
        // 内容类别
        if (isset($criteria['type']) && $criteria['type']) {
            $news->where('type_id', $criteria['type']);
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
        return $news->orderBy('sort')->orderBy('created_at', 'DESC')->get();
    }

    /**
     * 信息总数
     *
     * @return int
     */
    public function total()
    {
        return Product::withTrashed()->count();
    }

    /**
     * 更新排序
     *
     * @param $type
     * @param array $sort
     */
    public function resort($type, array $sort)
    {
        DB::transaction(function () use ($type, $sort) {
            $products = Product::query()->where('type_id', $type)->get();
            foreach ($products as $product) {
                $product->update([
                    'sort' => $sort[$product->id]
                ]);
            }
        });
    }
}
