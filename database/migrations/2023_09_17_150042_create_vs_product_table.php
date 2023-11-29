<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_product', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id")->unsigned()->nullable(); // danh mục
            $table->string("name",1000)->nullable();// tên sản phẩm
            $table->string("image",225)->nullable();// ảnh
            $table->integer("price")->nullable()->unsigned();// giá bán
            $table->integer("price_import")->nullable()->unsigned();// giá bán
            $table->text("short_description")->nullable();//mô tả ngắn
            $table->text("description")->nullable();//mô tả
            $table->text("tech_specs")->nullable();// thông số
            $table->integer("quantity")->nullable()->unsigned();// số lượng
            $table->integer("selling")->default(0);// sản phẩm bán chạy 1 là kích hoạt 0 là hủy
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
        Schema::dropIfExists('vs_product');
    }
}
