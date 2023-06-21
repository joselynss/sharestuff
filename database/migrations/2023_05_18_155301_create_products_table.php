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
            $table->id(); // PK
            $table->string('Name');
            $table->string('Description');
            $table->integer('Price');
            $table->integer('Quantity');
            // FK
            $table->unsignedBigInteger('Category_Id');
            $table->foreign('Category_Id')->references('id')->on('categories');
            // 'id' itu udh ada di categories_table ya. dan 'categories' itu sesuai kek di categories_table juga itu nama tabelnya
            $table->string('Image');
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
