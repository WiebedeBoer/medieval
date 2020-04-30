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
			//name
			$table->string('person_name');
			//portrait
			$table->string('portrait');
			//nickname
			$table->unsignedBigInteger('nickname')->default(1);
			//belonging
			$table->unsignedBigInteger('owner')->default(1);
			$table->unsignedBigInteger('dynasty')->default(1);
			$table->unsignedBigInteger('culture')->default(13);
			//place
			$table->unsignedBigInteger('place')->default(497);
			//religion
			$table->unsignedBigInteger('religion')->default(1);
			//person data
			$table->integer('gender');
			$table->integer('birth')->default(775);
			$table->string('career')->default('peasantry');
			$table->integer('alive')->default(1);
			//ruler heir checks
			$table->integer('ruler')->default(0);
			$table->integer('heir')->default(0);
			//relations
			$table->unsignedBigInteger('married')->default(1);
			//person turns
			$table->integer('kt')->default(0);
			$table->integer('pt')->default(0);
			//stats
			$table->integer('renown')->default(0);
			$table->integer('piety')->default(0);
			$table->integer('gold')->default(0);			
			//player stats
			$table->integer('jud')->default(1);
			$table->integer('eng')->default(1);
			$table->integer('com')->default(1);
			$table->integer('agr')->default(1);
			$table->integer('tac')->default(1);
			$table->integer('lea')->default(1);
			$table->integer('cha')->default(1);
			$table->integer('bra')->default(1);
			$table->integer('str')->default(1);
			$table->integer('agi')->default(1);
			$table->integer('pol')->default(1);
			$table->integer('swo')->default(1);
			$table->integer('arc')->default(1);
			$table->integer('rid')->default(1);
			$table->integer('sai')->default(1);
			$table->integer('rai')->default(1);
			$table->integer('tra')->default(1);
			//timestamp
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
