<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_buyer', function (Blueprint $table) {
            $table->unsignedBigInteger('Product_Id');
            $table->foreign('Product_Id')->references('id')->on('products')->onDelete('restrict'); // kalau dihapus gabisa
            $table->unsignedBigInteger('Buyer_Id');
            $table->foreign('Buyer_Id')->references('id')->on('buyers')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_buyer');
    }
}
