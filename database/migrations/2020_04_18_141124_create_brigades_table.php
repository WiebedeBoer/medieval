<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrigadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brigades', function (Blueprint $table) {
            $table->bigIncrements('brigade_id');
			$table->unsignedBigInteger('army');
			$table->unsignedBigInteger('captain');
			$table->string('brigade')->default('recruits');
			$table->integer('soldiers')->default(1);
			$table->integer('training')->default(1);
			$table->integer('morale')->default(1);
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
        Schema::dropIfExists('brigades');
    }
}
