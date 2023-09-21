<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_customer', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->unsigned()->nullable();
            $table->string("name",100)->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("sex",5)->nullable();
            $table->string("number_phone",20)->nullable();
            $table->string("email",100)->nullable();
            $table->string("adress",100)->nullable();
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
        Schema::dropIfExists('vs_customer');
    }
}
