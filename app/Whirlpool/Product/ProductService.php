<?php

namespace Whirlpool\Product;

use Illuminate\Http\Request;
use Whirlpool\Product\Entities\Product;

class ProductService
{
    public function create(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        // 特征字符串转数组
        $data['feature'] = $request->has('feature') ? $this->convertFeatureToArray($request->get('feature')) : [];
        // 技术参数过滤空值的
        $data['specification'] = $this->filterEmptySpecification($data['specification']);

        return Product::create($data);
    }

    private function convertFeatureToArray($feature)
    {
        $array = preg_split("/\\r\\n|\\r|\\n/", $feature);

        return array_unique(array_filter($array));
    }

    private function filterEmptySpecification($specification)
    {
        if (!$specification) {
            return [];
        }
        return array_filter($specification, function ($value) {
            return $value['value'] && $value['name'];
        });
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->all();
        if (isset($data['feature'])) {
            $data['feature'] = $this->convertFeatureToArray($data['feature']);
        }

        // filter specifications
        $data['specification'] = isset($data['specification'])
            ? array_filter($data['specification'], function($value){ return $value['value']; })
            : [];

        return $product->update($data);
    }
}
