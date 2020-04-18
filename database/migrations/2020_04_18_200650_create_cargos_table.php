<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
			$table->bigIncrements('cargo_id');
			//amount
			$table->integer('amount');
			//belonging
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('dynasty')->default(0);
			$table->unsignedBigInteger('fleet')->default(0);
			$table->unsignedBigInteger('caravan')->default(0);
			$table->unsignedBigInteger('place')->default(0);
			$table->unsignedBigInteger('resource')->default(0);
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
        Schema::dropIfExists('cargos');
    }
}
