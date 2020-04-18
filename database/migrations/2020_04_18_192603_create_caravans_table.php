<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaravansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caravans', function (Blueprint $table) {
			$table->bigIncrements('caravan_id');
			//name
			$table->string('caravan_name');
			//belonging
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('master')->default(0);
			$table->unsignedBigInteger('dynasty');
			$table->unsignedBigInteger('place');
			//pack animals
			$table->integer('sumpter')->default(0);
			$table->integer('oxen')->default(0);
			$table->integer('camel')->default(0);
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
        Schema::dropIfExists('caravans');
    }
}
