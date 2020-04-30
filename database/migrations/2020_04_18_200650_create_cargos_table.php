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
			$table->unsignedBigInteger('owner')->default(1);
			$table->unsignedBigInteger('dynasty')->default(1);
			$table->unsignedBigInteger('fleet')->nullable();
			$table->unsignedBigInteger('caravan')->nullable();
			$table->unsignedBigInteger('place')->nullable();
			$table->unsignedBigInteger('resource')->nullable();
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
