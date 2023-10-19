<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_order_detail', function (Blueprint $table) {
            $table->id();
            $table->integer("order_id")->unsigned()->nullable();
            $table->integer("product_id")->unsigned()->nullable();
            $table->decimal('price', 20, 2)->default(0)->nullable();
            $table->integer("quantity")->unsigned()->nullable();
            // $table->string("discout",200)->nullable();

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
        Schema::dropIfExists('vs_order_detail');
    }
}
