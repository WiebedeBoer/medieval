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
			$table->unsignedBigInteger('dynasty')->default(0);
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('master')->default(0);
			$table->unsignedBigInteger('place')->default(0);
			$table->unsignedBigInteger('resource')->default(0);
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
