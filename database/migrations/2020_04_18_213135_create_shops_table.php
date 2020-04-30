<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('shop_id');
			//belonging
			$table->unsignedBigInteger('dynasty')->default(1);
			$table->unsignedBigInteger('owner')->default(1);
			$table->unsignedBigInteger('master')->default(1);
			$table->unsignedBigInteger('place')->default(497);
			$table->unsignedBigInteger('resource')->nullable();
			//experience
			$table->integer('master_experience')->default(0);
			//sales
			$table->integer('sale_amount')->default(0);
			$table->integer('sale_price')->default(0);
			$table->integer('sale_reserve')->default(0);
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
        Schema::dropIfExists('shops');
    }
}
