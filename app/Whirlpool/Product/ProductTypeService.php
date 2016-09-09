<?php

namespace Whirlpool\Product;

use Illuminate\Http\Request;
use Whirlpool\Product\Entities\ProductType;

class ProductTypeService
{
    /**
     * 新建分类
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function create(Request $request)
    {
        $input = $request->all();
        $input = array_merge($input,
            isset($input['attributes'])
                ? ['attributes' => $this->convertFormAttributesToArray($input['attributes'])]
                : []
        );

        ProductType::create($input);
    }

    /**
     * 将前端传来的带换行的属性转化成数组
     *
     * @param string|null $attributes
     *
     * @return array
     */
    public function convertFormAttributesToArray($attributes)
    {
        $array = preg_split("/\\r\\n|\\r|\\n/", $attributes);

        return array_unique(array_filter($array));
    }

    public function update(ProductType $type, array $data)
    {
        if (isset($data['attributes'])) {
            $data['attributes'] = $this->convertFormAttributesToArray($data['attributes']);
        }

        return $type->update($data);
    }
}
