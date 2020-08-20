<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;

            $table->string('cpu_brand', 20)->nullable();
            $table->string('cpu_series', 20)->nullable();
            $table->string('cpu_suffixes',20)->nullable();
            $table->string('cpu_cores', 20)->nullable();
            $table->string('cpu_threads', 20)->nullable();
            $table->string('cpu_cache', 20)->nullable();
            $table->string('cpu_lithography', 20)->nullable();
            $table->string('cpu_base_clock', 20)->nullable();
            $table->string('cpu_boost_clock', 20)->nullable();

            $table->string('ram_amount', 20)->nullable();
            $table->string('ram_type', 20)->nullable();
            $table->string('ram_speed',20)->nullable();
            $table->integer('ram_socket_number')->nullable();
            $table->integer('ram_socket_existence_number')->nullable();
            $table->string('ram_max_amount_support', 20)->nullable();

            $table->string('display_size', 20)->nullable();
            $table->string('display_aspect_ratio', 20)->nullable();
            $table->string('display_resolution', 20)->nullable();
            $table->string('display_panel_type', 20)->nullable();
            $table->string('display_technology',50)->nullable();
            $table->tinyInteger('display_is_touch_screen')->default(0);

            $table->string('hard_drive_type', 20)->nullable();
            $table->string('hard_drive_amount', 20)->nullable();
            $table->tinyInteger('hard_drive_socket_number')->nullable();
            $table->tinyInteger('hard_drive_socket_existence_number')->nullable();
            $table->tinyInteger('hard_drive_is_support_ssd')->default(0);
            $table->tinyInteger('hard_drive_is_support_hdd')->default(0);

            $table->unsignedInteger('price')->nullable();
            $table->tinyInteger('not_onboard_graphics_card')->default(0);
            $table->string('graphics_card',150)->nullable();
            $table->string('ports',255)->nullable();
            $table->string('wifi',100)->nullable();
            $table->string('bluetooth',100)->nullable();
            $table->string('camera',100)->nullable();
            $table->string('microphone',100)->nullable();
            $table->string('speaker',100)->nullable();
            $table->string('os',100)->nullable();
            $table->string('dimension',150)->nullable();
            $table->string('weight',100)->nullable();
            $table->string('battery',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_detail');
    }
}
