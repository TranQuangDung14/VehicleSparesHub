<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsCartDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_cart_detail', function (Blueprint $table) {
            $table->id();
            $table->integer("cart_id")->unsigned()->nullable();
            $table->integer("product_id")->unsigned()->nullable();
            $table->integer("quantity")->unsigned()->nullable();
            $table->decimal('price_by_quantity', 20, 2)->default(0);
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
        Schema::dropIfExists('vs_cart_detail');
    }
}
