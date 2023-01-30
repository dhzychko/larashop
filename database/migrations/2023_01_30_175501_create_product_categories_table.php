<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) 
        {
            $table->id();
            $table->timestamps();
            $table->unsignedBiginteger('products_id')->unsigned();
            $table->foreign('products_id')->references('id')
                    ->on('products')->onDelete('cascade');
            $table->unsignedBiginteger('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')
                    ->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
};
