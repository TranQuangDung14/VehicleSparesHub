<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_carts', function (Blueprint $table) {
            $table->id();
            $table->integer("customer_id")->unsigned()->nullable();
            $table->decimal("total_money", 20, 2)->unsigned()->default(0);
            // $table->decimal('discounted_price', 20, 2)->default(0);
            // $table->integer("voucher_id")->unsigned()->nullable();
            $table->decimal('real_money', 20, 2)->default(0);
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
        Schema::dropIfExists('vs_carts');
    }
}
