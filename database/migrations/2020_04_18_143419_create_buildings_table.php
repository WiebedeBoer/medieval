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
			$table->unsignedBigInteger('owner')->default(1);
			$table->unsignedBigInteger('master')->default(1);
			//place
			$table->unsignedBigInteger('place')->nullable();
			//quarters
			$table->unsignedBigInteger('quarter')->nullable();
			//region
			$table->unsignedBigInteger('region')->nullable();
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
