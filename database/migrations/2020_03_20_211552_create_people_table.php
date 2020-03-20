<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('person_id');
			$table->unsignedBigInteger('owner');
			$table->unsignedBigInteger('dynasty');
			$table->unsignedBigInteger('culture');
			$table->integer('gender');
			$table->integer('birth');
			$table->integer('alive')->default(1);
			$table->unsignedBigInteger('spouse')->default(0);
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
        Schema::dropIfExists('people');
    }
}
