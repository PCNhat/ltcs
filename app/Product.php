<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar',
        'category_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the product detail for the product.
     */
    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function description()
    {
        return $this->hasManyThrough(ProductDescription::class, ProductDetail::class, 'product_id', 'product_detail_id', 'id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
