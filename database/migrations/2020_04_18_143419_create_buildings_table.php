<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('building_id');
			//name
			$table->string('building_name');
			//building state
			$table->integer('building_state')->default(100);
			//type
			$table->unsignedBigInteger('building_type');
			//belonging
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('master')->default(0);
			//place
			$table->unsignedBigInteger('place')->default(0);
			//quarters
			$table->unsignedBigInteger('quarter')->default(0);
			//region
			$table->unsignedBigInteger('region')->default(0);
			//religion
			$table->string('religion')->default('none');
			//raw resources
			$table->string('resource')->default('none');
			$table->integer('amount')->default(0);
			//sales
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
        Schema::dropIfExists('buildings');
    }
}
