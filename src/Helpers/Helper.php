<?php

namespace App\Helpers;

trait Helper
{
    public static function productDescription($product, $productDetailId)
    {
        $description = $product->description->where('product_detail_id', $productDetailId)->first();
        if (!empty($description)) {
            return $description->description;
        }

        return '';
    }
}
