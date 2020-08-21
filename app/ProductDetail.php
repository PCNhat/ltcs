<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'product_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'cpu_brand', 'cpu_series', 'cpu_suffixes', 'cpu_cores', 'cpu_threads', 'cpu_cache', 'cpu_lithography', 'cpu_base_clock', 'cpu_boost_clock',
        'ram_amount', 'ram_type', 'ram_speed', 'ram_socket_number', 'ram_socket_existence_number', 'ram_max_amount_support',
        'display_size', 'display_aspect_ratio', 'display_resolution', 'display_panel_type', 'display_technology', 'display_is_touch_screen',
        'hard_drive_type', 'hard_drive_amount', 'hard_drive_socket_number', 'hard_drive_socket_existence_number', 'hard_drive_is_support_ssd', 'hard_drive_is_support_hdd',
        'price',
        'not_onboard_graphics_card', 'graphics_card',
        'ports',
        'wifi', 'bluetooth',
        'camera', 'microphone', 'speaker',
        'os',
        'dimension', 'weight',
        'battery'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hard_drive_is_support_ssd' => 'boolean',
        'hard_drive_is_support_hdd' => 'boolean',
        'display_is_touch_screen' => 'boolean',
        'not_onboard_graphics_card' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Short description product
     *
     * @return string
     */
    public function getShortDescriptionAttribute()
    {
        $cpu = $ram = $display = $hardDrive = $price = null;
        if ($this->cpu_brand !== null) {
            $cpu = "CPU: {$this->cpu_brand} {$this->cpu_series} {$this->cpu_suffixes},";
        }

        if($this->ram_amount !== null) {
            $ram = "RAM: {$this->ram_amount} {$this->ram_type} {$this->ram_speed},";
        }

        if($this->display_size !== null) {
            $display = "<br>Màn hình: {$this->display_size} {$this->display_resolution} {$this->display_panel_type},";
        }

        if ($this->hard_drive_type !== null) {
            $hardDrive = "Ổ cứng: {$this->hard_drive_type} {$this->hard_drive_amount}";
        }

        $graphicsCard = "<br>Card đồ họa rời: {$this->graphics_card},";

        $price = "<p>Giá: {$this->price}</p>";

        $shortDescription = "$cpu $ram $display $hardDrive $graphicsCard $price";
        return $shortDescription;
    }

    public function description()
    {
        return $this->hasOne(ProductDescription::class, 'product_detail_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
