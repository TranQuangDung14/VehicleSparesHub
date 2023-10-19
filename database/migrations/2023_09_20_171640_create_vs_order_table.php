<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_order', function (Blueprint $table) {
            $table->id();
            $table->integer("customer_id")->unsigned()->nullable(); // mã khách hàng
            $table->decimal("total_money", 20, 2)->unsigned()->default(0);// tổng tiền
            $table->date("delivery_date",200)->nullable(); // ngày nhận dự tính
            $table->integer("shipping_fee")->unsigned()->nullable(); // phí vận chuyển
            $table->string("receiver_name",200)->nullable(); // Tên người nhận
            $table->string("number_phone",20)->nullable();//số điện thoại người nhận
            $table->string("receiver_address",200)->nullable();//địa chỉ chi tiết
            $table->integer("status")->default(1);
            $table->text("note")->nullable();
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
        Schema::dropIfExists('vs_order');
    }
}
