<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armies', function (Blueprint $table) {
            $table->bigIncrements('army_id');
			$table->unsignedBigInteger('marshall')->nullable();
			$table->unsignedBigInteger('general')->nullable();
			$table->unsignedBigInteger('lieutenant')->nullable();
			$table->unsignedBigInteger('owner');
			$table->unsignedBigInteger('location');
			$table->string('army_name');
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
        Schema::dropIfExists('armies');
    }
}
