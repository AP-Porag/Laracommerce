<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('sub_category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('summary')->nullable();
            $table->string('description')->nullable();
            $table->string('thumbnail')->default('/storage/categories/no-image-available.webp');
            $table->string('unit_id')->nullable();
            $table->string('price')->nullable();
            $table->string('reviews')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
