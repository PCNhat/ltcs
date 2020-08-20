<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr_description', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_detail_id')->nullable();
            $table->foreign('product_detail_id')->references('id')->on('product_detail')->onDelete('cascade');;
            $table->text('description')->nullable();
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
        Schema::dropIfExists('pr_description');
    }
}
